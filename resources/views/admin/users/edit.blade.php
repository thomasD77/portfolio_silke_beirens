@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Edit User</span></h1>

    @include('admin.includes.form_error')
    <div class="row">
        <div class="col-8 ">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminUsersController@update',$user->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Select role:') !!}
                {!! Form::select('roles[]',$roles,$user->roles->pluck('id')->toArray(),['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group mr-1">
                {!! Form::submit('Update user',['class'=>'btn btn-dark']) !!}
            </div>
            {!! Form::close() !!}
            <div class="d-flex">
                {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\AdminUsersController@destroy',
                $user->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete user',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
        <div class="col-4  d-flex justify-content-center align-items-center">
            <img class="img-thumbnail img-fluid" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">
        </div>
    </div>
@stop
