@extends('layouts.frontend_template')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                    <div class="entry col-12 my-5">
                        <div class="grid-inner">
                            <div class="entry-image mb-3">
                                <img class="img-fluid img-thumbnail" src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                            </div>
                            <div class="entry-title">
                                <h2><a class="text-decoration-none text-dark" href="">{{$post->title}}</a></h2>
                            </div>
                            <div class="entry-meta d-flex w-75 justify-content-between my-3">
                                <div><i class="far fa-calendar-alt me-2"></i>{{$post->created_at->diffForHumans()}}</div>
                                <div><i class="far fa-folder me-2"></i>{{$post->postcategory->name}}</div>
                            </div>
                            <div class="entry-content">
                                <p>{{$post->body}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@stop
