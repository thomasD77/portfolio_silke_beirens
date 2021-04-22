@extends('layouts.admin_template')
@section('content')
    <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-blog mr-2"></i>Edit Category</span></h1>

    <div class="row">
        <div class="col-12">
            {{--@include('includes.form_error')--}}
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminPostCategoriesController@update',
            $postcategory->id],
            'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $postcategory->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
