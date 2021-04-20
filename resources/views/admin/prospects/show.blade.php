@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-blog "></i>Prospects</span></h1>
    <div class="row my-3">
        <div class="col-12">
            <div class="card" style="width: 55rem;">
                <img class="card-img-top img-fluid" src="{{asset('images/frontend/duiker.PNG')}}" alt="{{$prospect->name}}">
                <div class="card-body">
                    <h4 class="card-title">Name:</h4>
                    <p class="card-text">{{$prospect->name}}</p>
                    <h4 class="card-title">Email:</h4>
                    <p class="card-text">{{$prospect->email}}</p>
                    <h4 class="card-title">Subject:</h4>
                    <p class="card-text">{{$prospect->subject}}</p>
                    <h4 class="card-title">Message:</h4>
                    <p class="card-text">{{$prospect->message}}</p>
                    <hr>
                    <p class="card-text">Created:{{$prospect->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
    </div>

@stop




