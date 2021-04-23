@extends('layouts.frontend_template')
@section('content')

<div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row ">
                        @foreach($posts as $post)
                            <div class="col-md-4 card border-0 my-4" style="background-color:#f8fafc" >
                                <img class="mt-3 img-fluid"  src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                                <div class="card-title border-none">
                                    <h2 class="mt-2"><a class="text-decoration-none text-dark" href="">{{Str::limit($post->title, 35)}}</a></h2>
                                </div>
                                <div class="card-body px-0  pt-0 ">
                                    <p class="mb-2">{{Str::limit($post->body, 200)}}</p>
                                    <div><i class="far fa-folder me-2"></i>{{$post->postcategory->name}}</div>
                                    <div><i class="far fa-calendar-alt me-2"></i>{{$post->created_at->diffForHumans()}}</div>
                                </div>
                                <div class="card-footer border-0 px-0" style="background-color:#f8fafc">
                                    <a  href="{{route('post', $post->slug)}}" class="btn btn-dark">Read More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4 ">
                {{$posts->links()}}
            </div>
</div>

@stop
