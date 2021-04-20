@extends('layouts.admin_template')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('Select Name: ')!!}
        {!! Form::select('users[]',$users,null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Select Category: ')!!}
        {!! Form::select('postcategories[]',$postcategories,null,['class'=>'form-control'])!!}
    </div>
    {{--<div class="form-group">
        {!! Form::label('Select Tag: ')!!}
        {!! Form::select('tag_id[]',$tags,null,['class'=>'form-control', 'multiple'=>'multiple'])!!}
    </div>--}}
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
