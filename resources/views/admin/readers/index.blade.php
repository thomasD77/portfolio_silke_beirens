@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Newsletter - Signed Up</span></h1>
    <p>Displaying {{$readers->count()}} of {{ $readers->total() }} reader(s).</p>

    <a class="btn btn-dark my-3" href="{{route('readers.export')}}">Export to Excel</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
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
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop




