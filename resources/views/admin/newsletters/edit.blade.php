@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Update Newsletter</span></h1>
    {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminNewslettersController@update',$newsletter->id],
                'files'=>true])!!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', $newsletter->title, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Text:') !!}
        {!! Form::text('body', $newsletter->body, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Update Newsletter',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
