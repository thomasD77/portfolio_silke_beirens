@extends('layouts.admin_template')
@section('content')


    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-swimmer mr-2"></i>users</span></h1>
    <div class="row my-3">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-body">
                    <h4 class="card-title">Name:</h4>
                    <p class="card-text">{{$user->name}}</p>
                    <h4 class="card-title">Email:</h4>
                    <p class="card-text">{{$user->email}}</p>
                    <h4 class="card-title">Role:</h4>
                    <p>@foreach($user->roles as $role)
                            <span class="badge badge-pill badge-info">{{$role->name}}</span>
                        @endforeach</p>
                    <h4 class="card-title">Status:</h4>
                    <p class="card-text">{{$user->is_active}}</p>
                    <h4 class="card-title">Password:</h4>
                    <p class="card-text">{{$user->password}}</p>
                    <hr>
                    <p class="card-text">Created:{{$user->created_at->diffForHumans()}}</p>
                    <p class="card-text">Updated:{{$user->updated_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img class="img-thumbnail img-fluid" height="62" width="62" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">
        </div>
    </div>

    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Orders</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Address(es)</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Company(ies)</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">user Id</th>
                    <th scope="col">Order Nr</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->orders as $order)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$order->id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Street</th>
                    <th scope="col">Number</th>
                    <th scope="col">City</th>
                    <th scope="col">Postal code</th>
                    <th scope="col">Country</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->addresses as $address)
                    <tr>
                        <td>{{$address->id}}</td>
                        <td>{{$address->street}}</td>
                        <td>{{$address->number}}</td>
                        <td>{{$address->city}}</td>
                        <td>{{$address->postalcode}}</td>
                        <td>{{$address->country}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{--<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">BTW-nr</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Postalcode</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->companies as $company)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->btw_nr}}</td>
                        <td>{{$company->address}}</td>
                        <td>{{$company->city}}</td>
                        <td>{{$company->postalcode}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>--}}
    </div>




@stop




