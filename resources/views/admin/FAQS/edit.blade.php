@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Edit FAQ</span></h1>
    @include('admin.includes.form_error')
    <div class="row">
        <div class="col-8 img-thumbnail">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminFAQSController@update',$FAQ->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('questions', 'Question:') !!}
                {!! Form::text('questions',$FAQ->questions,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('answers', 'Answer:') !!}
                {!! Form::text('answers',$FAQ->answers,['class'=>'form-control']) !!}
            </div>
            <div class="form-group mr-1">
                {!! Form::submit('Update FAQ',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
    </div>
@stop
