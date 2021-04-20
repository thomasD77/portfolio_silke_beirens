@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>Prospects</span></h1>
    <p>Displaying {{$prospects->count()}} of {{ $prospects->total() }} order(s).</p>

    <a class="btn btn-dark my-3" href="{{route('prospects.export')}}">Export to Excel</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if($prospects)
            @foreach($prospects as $prospect)
                <tr>
                    <td>{{$prospect->id}}</td>
                    <td>{{$prospect->name}}</td>
                    <td>{{$prospect->email}}</td>
                    <td>{{$prospect->subject}}</td>
                    <td>Message from Prospect</td>
                    <td>{{$prospect->created_at->diffForHumans()}}</td>
                    <td>{{$prospect->updated_at->diffForHumans()}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('prospects.show', $prospect->id)}}">Show</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop




