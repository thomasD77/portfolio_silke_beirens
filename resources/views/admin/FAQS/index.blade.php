@extends('layouts.admin_template')
@section('content')

    <div class="d-flex justify-content-between my-4">
        <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-question-circle mr-2"></i>FAQs</span></h1>
        <h3><span class="badge bg-dark display-1 shadow my-2"><i class=" fas fa-plus text-white"></i><a class="text-white text-decoration-none" href="{{route('faqs.create')}}">Add New</a></span></h3>
    </div>

    @if(Session::has('faqs_message'))
        <p class="alert alert-info my-3">{{session('faqs_message')}}</p>
    @endif
    <p>Displaying {{$FAQS->count()}} of {{ $FAQS->total() }} FAQ(s).</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Questions</th>
            <th scope="col" >Answers</th>
            <th scope="col">Actions</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @if($FAQS)
            @foreach($FAQS as $FAQ)
                <tr>
                    <td>{{$FAQ->id}}</td>
                    <td><a href="{{route('faqs.create', $FAQ->id)}}">{{$FAQ->questions}}</a></td>
                    <td>{{$FAQ->answers ? $FAQ->answers : 'No FAQname'}}</td>
                    <td>{{$FAQ->created_at->diffForHumans()}}</td>
                    <td>{{$FAQ->updated_at->diffForHumans()}}</td>
                    <td>{{$FAQ->deleted_at}}</td>
                    <td>
                        @if($FAQ->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.FAQRestore', $FAQ->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminFAQSController@destroy', $FAQ->id]]) !!}
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
    {{$FAQS->links()}}
@stop




