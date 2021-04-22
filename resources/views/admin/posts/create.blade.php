@extends('layouts.admin_crud_template')
@section('content')
    <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-blog mr-2"></i>Create Post</span></h1>

    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Select Category: ')!!}
        {!! Form::select('postcategories[]',$postcategories,null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Create Post',['class'=>'btn btn-dark']) !!}
    {!! Form::close() !!}
@stop
