<?php

namespace App\Http\Controllers;

use App\Exports\ContactExport;
use App\Exports\ReaderExport;
use App\Models\PostCategory;
use App\Models\Prospect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminProspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prospects = Prospect::withTrashed()->latest()->paginate(10);
        return view ('admin.prospects.index', compact('prospects'));
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
    public function store(Request $request)
    {
        //
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
        $prospect = Prospect::findOrFail($id);
        return view('admin.prospects.show', compact('prospect'));
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
        $prospect = Prospect::findOrFail($id);
        $prospect->delete();
        Session::flash('prospect_message', $prospect->name . ' was deleted');
        return redirect('/admin/prospects');
    }

    public function prospectRestore($id)
    {
        $prospect = Prospect::onlyTrashed()->findOrFail($id);
        Prospect::onlyTrashed()->where('id', $id);
        $prospect->restore();
        Session::flash('prospect_message', $prospect->name . ' was restored');
        return redirect('admin/prospects');
    }


    public function export(Request $request)
    {

        return Excel::download(new ContactExport(), 'email_list_contactform.xlsx');
    }
}
