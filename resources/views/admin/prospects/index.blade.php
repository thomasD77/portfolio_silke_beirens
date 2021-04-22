@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-fingerprint pr-2"></i>Readers - Contactform</span></h1>
    <p>Displaying {{$prospects->count()}} of {{ $prospects->total() }} order(s).</p>

    @if(Session::has('prospect_message'))
        <p class="alert alert-info my-3">{{session('prospect_message')}}</p>
    @endif

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
            <th scope="col">Deleted</th>
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
                        @if($prospect->deleted_at == null)
                        <a class="btn btn-success" href="{{route('prospects.show', $prospect->id)}}">Show</a>
                        @endif
                    </td>
                    <td>{{$prospect->deleted_at}}</td>
                    <td>
                        @if($prospect->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.prospectRestore', $prospect->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminProspectsController@destroy', $prospect->id]]) !!}
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




