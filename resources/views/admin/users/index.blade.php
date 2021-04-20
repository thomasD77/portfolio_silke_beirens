@extends('layouts.admin_template')
@section('content')

    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Users</span></h1>    <h3><span class="badge badge-success display-1 shadow my-2">
            <i class="fas fa-plus"></i>
            <a class="text-white text-decoration-none" href="{{route('users.create')}}">Add New</a></span></h3>
    @if(Session::has('user_message'))
        <p class="alert alert-info my-3">{{session('user_message')}}</p>
    @endif
    <p>Displaying {{$users->count()}} of {{ $users->total() }} user(s).</p>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">@sortablelink('id')</th>
            <th scope="col">Photo</th>
            <th scope="col" >@sortablelink('name')</th>
            <th scope="col" >@sortablelink('username')</th>
            <th scope="col">@sortablelink('email')</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Password</th>
            <th scope="col">Actions</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>



        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img class="rounded-circle" height="62" width="62" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">
                    </td>
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->username ? $user->username : 'No username'}}</td>
                    <td>{{$user->email ? $user->email : 'No email'}}</td>
                    <td>@foreach($user->roles as $role)
                          <span class="badge badge-pill badge-info">{{$role->name}}</span>
                      @endforeach</td>
                    <td>{{$user->is_active ? $user->is_active : 'No status'}}</td>
                    <td>{{$user->password ? Str::limit($user->password, 6) : 'No password'}}</td>
                    <td><a class="btn btn-info" href="{{route('users.show', $user->id)}}">Show</a></td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>{{$user->deleted_at}}</td>
                    <td>
                        @if($user->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.userRestore', $user->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminUsersController@destroy', $user->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$users->links()}}
@stop




