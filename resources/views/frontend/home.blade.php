@extends('layouts.frontend_home_template')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex flex-column">

                <img class="img-fluid " src="{{asset('images/frontend/silke_psd.jpg')}}" alt="">
        </div>
    </div>
</div>
<main>

    <section class="container-fluid my-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </h1>
                <p>Autem deserunt eius expedita minus
                    nesciunt repudiandae temporibus voluptas. Atque consequuntur cupiditate error in iusto labore optio,
                    quibusdam repellat soluta totam ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium alias aliquam beatae blanditiis, cum doloremque dolorum, earum excepturi fugiat hic id
                    inventore, odio officia quasi quidem sunt totam voluptate voluptates? </p>
            </div>
        </div>
    </section>
    <section class="container-fluid my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                <h2 class="text-center my-4">Meest recente nieuws </h2>
                @foreach($posts as $post)
                    <div class="col-md-4 card border-0 my-4" style="background-color:#f8fafc" >
                        <img class="mt-3 img-fluid"  src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                        <div class="card-title border-none">
                            <h2 class="mt-2"><a class="text-decoration-none text-dark" href="">{{Str::limit($post->title, 35)}}</a></h2>
                        </div>
                        <div class="card-body px-0  pt-0 ">
                            <p class="mb-2">{{substr(strip_tags($post->body),0,200)}}{{strlen(strip_tags($post->body))
                        > 200 ? "..." : ""}}</p>
                            <div><i class="far fa-folder me-2"></i>{{$post->postcategory ? $post->postcategory->name : ""}}</div>
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
    </section>
    <section class="container-fluid my-5">
        <div class="row px-0 py-5" id="bereikbaar">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase text-white">Stay Connected</h2>
                        <p class="text-white">Subscribe to our newsleter and stay up to date with <br>
                            latest offers and upcoming trends</p>
                    </div>
                    <div class="col-md-6">
                        <div id="form" class="input-group mb-3">
                            <form class="d-flex flex-column" action="{{action('App\Http\Controllers\AdminReadersController@store')}}" method="post">
                                @csrf
                                <div class="d-flex">
                                   <input id="inputmail" name="newsletter" type="email" class="form-control mr-0 rounded" placeholder="E-mail...">
                                    <button class="my-lg-0 py-1 btn-dark rounded" type="submit" id="btnnewsletter">Send</button>
                                </div>
                                @if(Session::has('readers_message'))
                                    <div class="alert alert-dark alert-dismissible fade show mt-4" role="alert">
                                        <p class="mb-0 alert-dark">{{session('readers_message')}}</p>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="socials" class="container my-5">
        <h2 class="text-center my-4">My Instagram Feed</h2>
        <div id="instafeed-container" class="row gallery"></div>
    </div>
@stop




