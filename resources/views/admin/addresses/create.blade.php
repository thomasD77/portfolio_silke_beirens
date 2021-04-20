@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Create Address</span></h1>
    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminAddressesController@store']) !!}
    <div class="form-group">
        {!! Form::label('street', 'Street:') !!}
        {!! Form::text('street',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('number', 'Number:') !!}
        {!! Form::number('number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('postbox', 'Postbox:') !!}
        {!! Form::number('postbox',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Customers: (hou de CTRL toets ingedrukt om meerdere customers te selecteren') !!}
        {!! Form::select('users[]',$users,null,['class'=>'form-control','multiple'=>'multiple'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        {!! Form::text('country',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Create Address',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
