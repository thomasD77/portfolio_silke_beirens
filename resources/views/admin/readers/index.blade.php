@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"> <i class="far fa-newspaper pr-2"></i>Subscribers - Newsletter</span></h1>
    <p>Displaying {{$readers->count()}} of {{ $readers->total() }} reader(s).</p>

    @if(Session::has('reader_message'))
        <p class="alert alert-info my-3">{{session('reader_message')}}</p>
    @endif

    <a class="btn btn-dark my-3" href="{{route('readers.export')}}">Export to Excel</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>

        </tr>
        </thead>
        <tbody>
        @if($readers)
            @foreach($readers as $reader)
                <tr>
                    <td>{{$reader->id}}</td>
                    <td>{{$reader->email}}</td>
                    <td>{{$reader->created_at->diffForHumans()}}</td>
                    <td>{{$reader->updated_at->diffForHumans()}}</td>
                    <td>{{$reader->deleted_at}}</td>
                    <td>
                        @if($reader->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.readerRestore', $reader->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminReadersController@destroy', $reader->id]]) !!}
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
@stop




