<?php

namespace App\Http\Controllers;

use App\Http\Requests\addressRequest;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $addresses = Address::withTrashed()->with(['users'])->latest()
            ->sortable(['street', 'number', 'city', 'postbox', 'country'])->paginate(10);
        return view('admin.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::pluck('name', 'id')->all();
        return view('admin.addresses.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addressRequest $request)
    {
        //

        $input = $request->all();
        $addresses = Address::create($input);

        /**wegschrijven van de tussentabel**/
        $addresses->users()->sync($request->users, false);

        return redirect('/admin/addresses');

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
        $address = Address::findOrFail($id);
        $users = User::pluck('name', 'id')->all();
        return view('admin.addresses.edit', compact('users', 'address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(addressRequest $request, $id)
    {
        //

        $input = $request->all();
        $addresses = Address::findOrFail($id);
        $addresses->update($input);
        /**wegschrijven van de tussentabel**/
        $addresses->users()->sync($request->users, false);

        return redirect('/admin/addresses');
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
        $address = Address::findOrFail($id);
        $address->delete();
        Session::flash('address_message', $address->street . ' was deleted');
        return redirect('/admin/addresses');
    }

    public function addressRestore($id)
    {
        $address = Address::onlyTrashed()->findOrFail($id);
        User::onlyTrashed()->where('id', $id);
        $address->restore();
        Session::flash('address_message', $address->street . ' was restored');
        return redirect('admin/addresses');
    }
}
