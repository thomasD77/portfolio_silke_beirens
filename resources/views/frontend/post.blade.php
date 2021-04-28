@extends('layouts.frontend_template')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                    <div class="entry col-12 my-5">
                        <div class="grid-inner">
                            <div class="entry-image mb-3">
                                <img class="img-fluid" src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                            </div>
                            <div class="entry-title d-flex justify-content-between">
                                <h2><a class="text-decoration-none text-dark" href="">{{$post->title}}</a></h2>
                                <div id="social2" class="d-flex justify-content-end align-items-center">
                                    <p class="mb-0">Share this:</p>

                                    <a class="d-flex justify-content-center align-items-center rounded mx-1"
                                       href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}&display=popup" target="_blank"><i
                                            class="fab fa-facebook-f" id="facebook"></i></a>

                                    <a class="d-flex justify-content-center align-items-center rounded mx-1"
                                       href="https://twitter.com/intent/tweet?text=my share text&url={{Request::url()}}" target="_blank"><i
                                            class="fab fa-twitter"></i></a>

                                    <a class="d-flex justify-content-center align-items-center rounded mx-1"
                                       href="http://www.linkedin.com/shareArticle?mini=true&url={{Request::url()}}&title=my share text&summary=dit is de linkedin summary" target="_blank"><i
                                            class="fab fa-linkedin"></i></a>

                                    <a class="d-flex justify-content-center align-items-center rounded mx-1"
                                       href="https://wa.me/?text={{Request::url()}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="entry-meta d-flex w-75 justify-content-between my-3">
                                <div><i class="far fa-calendar-alt me-2"></i>{{$post->created_at->diffForHumans()}}</div>
                                <div><i class="far fa-folder me-2"></i>{{$post->postcategory ? $post->postcategory->name : ""}}</div>
                            </div>
                            <div class="entry-content">
                                <p>{!! $post->body !!}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@stop
