@extends('layouts.admin_crud_template')
@section('content')
    <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-blog mr-2"></i>Create Post</span></h1>
    @include('admin.includes.form_error')
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
        {!! Form::textarea('body',null,['class'=>'form-control', 'id' => 'textarea-editor']) !!}
    </div>

    <div class="form-group mb-0">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <h7 class="text-danger mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
        </svg> Best Quality? Please upload an image around 800x550px</h7>


    <div class="form-group mt-3">
    {!! Form::submit('Create Post',['class'=>'btn btn-dark']) !!}
    {!! Form::close() !!}

@stop
