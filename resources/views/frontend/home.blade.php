@extends('layouts.frontend_home_template')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex flex-column">
            <div id="imagediving" class="row mx-0">
                <img class="img-fluid" src="{{asset('images/frontend/header2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<main>
    <div class="container-fluid my-5">
        <div class="row px-0 py-5" id="bereikbaar">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase text-white">Stay Connected</h2>
                        <p class="text-white">Subscribe to our newsleter and stay up to date with <br>
                            latest offers and upcoming trends</p>
                        <p> @include('admin.includes.form_error')</p>
                    </div>
                    <div class="col-md-6">
                        <div id="form" class="col-md-6 input-group mb-3">
                            <form class="d-flex flex-column" action="{{action('App\Http\Controllers\AdminReadersController@store')}}" method="post">
                                @csrf
                                <div class="d-flex">
                                    <label id="label" class=""><input id="inputmail" name="newsletter" type="email" class="form-control w-100  ps-4 " placeholder="E-mail..."> </label>
                                    <button class="my-lg-0 py-1 btn-dark" type="submit" id="btnnewsletter">Send</button>
                                </div>
                                @if(Session::has('readers_message'))
                                    <div class="alert alert-dark alert-dismissible fade show mt-5" role="alert">
                                        <p class="mb-0 alert-dark">{{session('readers_message')}}</p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidde="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="socials" class="container my-5">
        <div id="instafeed-container" class="row gallery"></div>
    </div>
@stop




