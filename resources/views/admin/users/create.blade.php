@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Create User</span></h1>
    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminUsersController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Select role:') !!}
        {!! Form::select('roles[]',$roles,null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Create user',['class'=>'btn btn-dark']) !!}
    {!! Form::close() !!}

@stop
