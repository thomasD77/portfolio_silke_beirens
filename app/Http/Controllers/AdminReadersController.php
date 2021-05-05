<?php

namespace App\Http\Controllers;

use App\Exports\ReaderExport;
use App\Http\Requests\NewsletterRequest;
use App\Models\Reader;
use App\Models\Review;
use Illuminate\Http\Request;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;


class AdminReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $readers = Reader::withTrashed()->latest()->paginate(10);

        return view('admin.readers.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        //
            $url = URL::previous();
            if($request->newsletter != null){

                $data =[
                    'email'=>$request->newsletter,
                ];
                Reader::create($data);
                Session::flash('readers_message', 'Thanks! You signed up for our Newsletter');
            }else{

                return Redirect::to($url . "#form");
            }

        return Redirect::to($url . "#form");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reader = Reader::findOrFail($id);
        $reader->delete();
        Session::flash('reader_message', $reader->email . ' was deleted');
        return redirect('/admin/readers');
    }

    public function readerRestore($id)
    {
        $reader = Reader::onlyTrashed()->findOrFail($id);
        Reader::onlyTrashed()->where('id', $id);
        $reader->restore();
        Session::flash('reader_message', $reader->email . ' was restored');
        return redirect('admin/readers');
    }

    public function export()
    {
        return Excel::download(new ReaderExport(), 'email_list_newsletter.xlsx');
    }
}
