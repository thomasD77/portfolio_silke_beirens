@extends('layouts.admin_crud_template')
@section('content')
    <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-question-circle mr-2"></i>Edit FAQ</span></h1>

    @include('admin.includes.form_error')
    <div class="row">
        <div class="col-12">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminFAQSController@update',$FAQ->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('questions', 'Question:') !!}
                {!! Form::text('questions',$FAQ->questions,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('answers', 'Answer:') !!}
                {!! Form::textarea('answers',$FAQ->answers,['class'=>'form-control']) !!}
            </div>
            <div class="form-group mr-1">
                {!! Form::submit('Update FAQ',['class'=>'btn btn-dark']) !!}
            </div>
            {!! Form::close() !!}
    </div>
@stop
