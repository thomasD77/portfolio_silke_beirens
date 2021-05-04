<?php

namespace App\Http\Controllers;

use App\Events\UsersSoftDeleteOrders;
use App\Events\UsersSoftRestoreOrders;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UsersEditRequest;
use App\Mail\WelcomeMail;
use App\Models\Address;
use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Image;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $users = User::withTrashed()->with(['photo', 'roles'])->latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
            //
            $user = new User();
            $user->name= $request->name;
            $user->email = $request->email;

            if($file = $request->file('photo_id')){
                $name = time(). $file->getClientOriginalName();
                $file->move('images/users', $name);

                // Image Resize
                $path =  'images/users/' . $name;
                $image = Image::make($path);
                $image->resize(250,400);
                $image->save('images/users/' . $name);
                $photo = Photo::create(['file'=>$name]);
                $user->photo_id = $photo->id;
            }

            $user->password = Hash::make($request['password']);
            $user->save();

            /**wegschrijven van de tussentabel**/
            $user->roles()->sync($request->roles, false);


            return redirect('admin/users');
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
        $user = User::findOrFail($id);
        return view ('admin.users.show', compact('user'));
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);
        if(trim($request->password == '')){
            $input = $request->except('password');
        }else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }

        if($file = $request->file('photo_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('images/users', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $user->update($input);

        /**wegschrijven van de tussentabel**/
        $user->roles()->sync($request->roles, true);



        return redirect('admin/users');
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
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('user_message', $user->name . ' was deleted');
        return redirect('/admin/users');
    }

    public function userRestore($id)
    {

        $user = User::onlyTrashed()->findOrFail($id);
        Session::flash('user_message', $user->name . ' was restored');
        $user->restore();

        return redirect('admin/users');
    }


    public function search_item(request $request)
    {
        $search_text = $request->searchbar;
        $users = User::where('name', 'LIKE', '%' .$search_text. '%')->paginate(10);
        return view('admin.search.index', compact('users'));
    }


}
