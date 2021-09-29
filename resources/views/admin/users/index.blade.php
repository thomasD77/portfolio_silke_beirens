@extends('layouts.admin_template')
@section('content')

    <div class="d-flex justify-content-between my-4">
        <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Users</span></h1>
        <h3><span class="badge bg-dark display-1 shadow my-2"><i class=" fas fa-plus text-white"></i><a class="text-white text-decoration-none" href="{{route('users.create')}}">Add New</a></span></h3>
    </div>

    @if(Session::has('user_message'))
        <p class="alert alert-info my-3">{{session('user_message')}}</p>
    @endif
    <p>Displaying {{$users->count()}} of {{ $users->total() }} user(s).</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col" >Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                @if($user->email != 'thomas.demeulenaere@hotmail.com')
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img class="rounded-circle" height="62" width="62" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">
                    </td>
                    @if($user->deleted_at == null)
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    @else
                    <td>{{$user->name}}</td>
                    @endif
                    <td>{{$user->email ? $user->email : 'No email'}}</td>
                    <td>@foreach($user->roles as $role)
                          <span class="badge badge-pill badge-success p-2">{{$role->name ? $role->name : 'No Role' }}</span>
                      @endforeach</td>
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
                @endif
            @endforeach
        @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-5">
        {{$users->links()}}
    </div>
@stop




