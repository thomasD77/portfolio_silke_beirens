@extends('layouts.frontend_template')
@section('content')


<main id="contact" class="container-fluid">

    <section id="contactformulier" class="mt-5">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                @if(Session::has('contactform_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p class="alert-success">Thanks for your interest in our Company!</p>
                        <hr>
                        <p class="mb-0 alert-success">{{session('contactform')}}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidde="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <div class="row d-flex">
                <div class="col-12 col-lg-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 w-50 groengroen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <p class="mb-0">Kerkstraat 25</p>
                    <p>1000 Brussel</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-50 groengroen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <p class="mb-0">+32 474 41 36 66</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  w-50 groengroen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p class="mb-0">info@divemaster.com</p>
                </div>
            </div>
        </div>
    </div>


    @include('frontend.includes.contactformulier')

@stop
