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
                {!! Form::textarea('body',$post->body,['class'=>'form-control', 'id' => 'textarea-editor']) !!}
            </div>
            <div class="form-group mb-0">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <h7 class="text-danger mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                    <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
                </svg> Best Quality? Please upload an image around 800x550px</h7>
            <div class="form-group mr-1 mt-3">
                {!! Form::submit('Update Post',['class'=>'btn btn-dark']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-4  d-flex justify-content-center align-items-center">
            <img class="img-thumbnail img-fluid"  src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">

        </div>
    </div>
@stop
