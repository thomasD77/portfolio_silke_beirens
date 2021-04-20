@extends('layouts.admin_template')
@section('content')

    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-blog"></i>Post Categories</span></h1>
    <h3><span class="badge badge-success display-1 shadow my-2">
            <i class="fas fa-plus"></i>
            <a class="text-white text-decoration-none" href="{{route('postcategories.create')}}">Add New</a></span></h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Subject</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($postcategories)
            @foreach($postcategories as $postcategory)
                <tr>
                    <td>{{$postcategory->id}}</td>
                    <td><a href="{{route('postcategories.edit', $postcategory->id)}}">{{$postcategory->name}}</a></td>
                    <td>{{$postcategory->created_at->diffForHumans()}}</td>
                    <td>{{$postcategory->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$postcategories->links()}}
@stop





