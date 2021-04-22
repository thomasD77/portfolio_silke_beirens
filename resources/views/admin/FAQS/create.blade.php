@extends('layouts.admin_crud_template')
@section('content')
    @include('admin.includes.form_error')
    <div>
        <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-question-circle mr-2"></i>Create FAQ</span></h1>
        {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminFAQSController@store']) !!}
        <div class="form-group">
            {!! Form::label('questions', 'Question:') !!}
            {!! Form::text('questions',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('answers', 'Answers:') !!}
            {!! Form::textarea('answers',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create FAQ',['class'=>'btn btn-dark']) !!}
            {!! Form::close() !!}
    </div>

@stop
