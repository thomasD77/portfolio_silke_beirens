@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Edit Address</span></h1>
    {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminAddressesController@update', $address->id]]) !!}
    <div class="form-group">
        {!! Form::label('street', 'Street:') !!}
        {!! Form::text('street',$address->street,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('number', 'Number:') !!}
        {!! Form::number('number',$address->number,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('postbox', 'Postbox:') !!}
        {!! Form::number('postbox',$address->postbox,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city',$address->city,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Customers: (hou de CTRL toets ingedrukt om meerdere customers te selecteren') !!}
        {!! Form::select('users[]',$users,$address->users,['class'=>'form-control','multiple'=>'multiple'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        {!! Form::text('country',$address->country, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Edit Address',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
