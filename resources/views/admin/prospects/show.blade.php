@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-fingerprint"></i>Readers</span></h1>
    <div class="row my-3">
        <div class="col-12">
            <div class="card border-none" style="width: 55rem;">
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




