@extends('layouts.frontend_template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column px-0">
                <img class="img-fluid " src="{{asset('images/frontend/contact.jpg')}}" alt="">
            </div>
        </div>
    </div>


<main id="contact" class="container-fluid">

    <section id="contactformulier" class="mt-5">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                @if(Session::has('contactform_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4 class="alert-heading">Bedankt!</h4>
                        <p class="alert-success">Het contactforumlier staat klaar voor behandeling.</p>
                        <hr>
                        <p class="mb-0 alert-success">{{session('contactform')}}</p>

                    </div>
                @endif
            </div>
        </div>
    </section>

    <div id="credits" class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <div class="row d-flex">
                <div class="col-12 col-lg-4 text-center">
                    <i class="fas fa-map-marker-alt fa-5x groengroen my-2"></i>
                    <p class="mb-0">Vindictivelaan 1</p>
                    <p>8400 Oostende</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <i class="fas fa-mobile-alt fa-5x groengroen my-2"></i>
                    <p class="mb-0">T 059 25 84 59</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <i class="far fa-envelope-open fa-5x groengroen my-2"></i>
                    <p class="mb-0">Silke Beirens</p>
                </div>
            </div>
        </div>
    </div>

    <div id="contactforumlier_anchor"></div>
    @include('frontend.includes.contactformulier')


    @if($FAQS)
    <section id="FAQ" class="row my-5">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="accordion" id="accordionExample">
                    <h2 class="mt-5">FAQS</h2>
                    @foreach($FAQS as $FAQ)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{$FAQ->id}}">
                                <button class="accordion-button text-dark bg-light btn-outline-dark" type="button"  data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$FAQ->id}}" aria-expanded="true"
                                        aria-controls="collapse{{$FAQ->id}}">
                                    {{$FAQ->questions}}
                                </button>
                            </h2>
                            <div id="collapse{{$FAQ->id}}" class="accordion-collapse collapse text-dark bg-light "
                                 aria-labelledby="{{$FAQ->id}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-dark bg-light">
                                    {{$FAQ->answers}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

@stop
