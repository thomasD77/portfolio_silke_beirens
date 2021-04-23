@extends('layouts.frontend_home_template')
@section('content')

<div class="row">
    <div class="col-12 d-flex flex-column">
        <div id="imagediving" class="row img-fluid  mx-0">
            <img src="{{asset('images/frontend/header2.jpg')}}" alt="">
        </div>
    </div>
</div>
<main>
    <div class="container-fluid">
    {{--<div id="bereikbaar" class="row mt-md-5 py-5">
        <div class="col-md-10 offset-md-1"></div>
            <div class="row">

                <div class="col-md-6">
                    <h2 class="text-uppercase">Stay Connected</h2>
                    <p>Subscribe to our newsleter and stay up to date with <br>
                        latest offers and upcoming trends</p>
                    <p> @include('admin.includes.form_error')</p>
                </div>

                <div id="form" class="col-md-6 input-group mb-3">
                    <form class="d-flex flex-column" action="{{action('App\Http\Controllers\AdminReadersController@store')}}" method="post">
                        @csrf
                        <label id="label"><input id="inputmail" name="newsletter" type="email" class="form-control ps-4 " placeholder="E-mail..."> </label>
                        <button class="my-lg-0 py-1 btn-dark" type="submit" id="btnnewsletter">Send</button>

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
    </div>--}}

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
                                    <label id="label"><input id="inputmail" name="newsletter" type="email" class="form-control ps-4 " placeholder="E-mail..."> </label>
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




