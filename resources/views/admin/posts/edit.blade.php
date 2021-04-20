@extends('layouts.admin_template')
@section('content')
    <h1>Edit Post</h1>
    <div class="row">
        <div class="col-8 img-thumbnail">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminPostsController@update',$post->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('user_id', 'Name: ') !!}
                {!! Form::select('user_id', $users, $post->user_id,['class'=>'form-control'])
                 !!}
            </div>
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
                {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-4 img-thumbnail d-flex justify-content-center align-items-center">
            <img class="img-fluid img-thumbnail" src="{{$post->photo ? asset($post->photo->file) : 'http://place-hold
               .it/400x400'}}" alt="">
        </div>
    </div>
@stop
