@extends('layouts.admin_crud_template')
@section('content')
    <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-blog mr-2"></i>Edit Post</span></h1>
    @include('admin.includes.form_error')
    <div class="row">
        <div class="col-8 ">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminPostsController@update',$post->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('postcategory_id', $postcategories, $post->postcategory_id,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body',$post->body,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group mr-1">
                {!! Form::submit('Update Post',['class'=>'btn btn-dark']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-4  d-flex justify-content-center align-items-center">
            <img class="img-thumbnail img-fluid"  src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">

        </div>
    </div>
@stop
