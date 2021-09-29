@extends('layouts.admin_template')
@section('content')

    <div class="d-flex justify-content-between my-4">
        <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-blog mr-2"></i>Categories</span></h1>
        <h3><span class="badge bg-dark display-1 shadow my-2"><i class=" fas fa-plus text-white"></i><a class="text-white text-decoration-none" href="{{route('postcategories.create')}}">Add New</a></span></h3>
    </div>

    @if(Session::has('postcategory_message'))
        <p class="alert alert-info my-3">{{session('postcategory_message')}}</p>
    @endif
    <p>Displaying {{$postcategories->count()}} of {{ $postcategories->total() }} post(s).</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Subject</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>
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
                    <td>{{$postcategory->deleted_at}}</td>
                    <td>
                        @if($postcategory->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.postcategoryRestore', $postcategory->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminPostCategoriesController@destroy', $postcategory->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-5">
        {{$postcategories->links()}}
    </div>
@stop





