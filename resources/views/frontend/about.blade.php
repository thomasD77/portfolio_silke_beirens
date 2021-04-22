@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid">
    <div id="app"></div>
    <section class="row my-5">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="accordion" id="accordionExample">
                    <h2 class="mt-5">FAQS</h2>
                    @foreach($FAQS as $FAQ)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{$FAQ->id}}">
                                <button class="accordion-button text-dark bg-light btn-outline-dark" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$FAQ->id}}" aria-expanded="true"
                                        aria-controls="collapse{{$FAQ->id}}">
                                    {{$FAQ->questions}}
                                </button>
                            </h2>
                            <div id="collapse{{$FAQ->id}}" class="accordion-collapse collapse "
                                 aria-labelledby="{{$FAQ->id}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{$FAQ->answers}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@stop
