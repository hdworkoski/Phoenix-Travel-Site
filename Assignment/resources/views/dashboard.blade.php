@extends('layouts.app')

@section('sidebar')
<li class="nav-item active">
    <a class="nav-link" href="{{ url('/dashboard') }}">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/customers') }}">
        <i class="material-icons">people</i>
        <p>Customers</p>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/bookings') }}">
        <i class="material-icons">local_offer</i>
        <p>Bookings</p>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/tours') }}">
        <i class="material-icons">directions_bus</i>
        <p>Tours</p>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/trips') }}">
        <i class="material-icons">calendar_today</i>
        <p>Trips</p>
    </a>
</li>
@if(\Illuminate\Support\Facades\Auth::user()->role == 'manager')
<li class="nav-item">
    <a class="nav-link" href="{{ url('/staff') }}">
        <i class="material-icons">work</i>
        <p>Staff</p>
    </a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link" href="{{ url('/vehicles') }}">
        <i class="material-icons">directions_car</i>
        <p>Vehicles</p>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/reviews') }}">
        <i class="material-icons">rate_review</i>
        <p>Reviews</p>
    </a>
</li>
@endsection

@section('title')
<h1 class="navbar-brand">Dashboard</h1>
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <img style="display:block;max-width:100%;width:80%;height:18em;margin-left:10%;margin-bottom:2em;" src="{{ asset('img/PhoenixTravelImg.png') }}">
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                    <a class="nav-link text-white" href="{{ url('/customers') }}">
                        <h4><i class="material-icons">people</i>
                            Customers</h4>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-category">
                        <span class="text-success">{{ $count }}</span> new customers to be approved.</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-warning">
                    <a class="nav-link text-white" href="{{ url('/reviews') }}">
                        <h4><i class="material-icons">rate_review</i>
                            Reviews</h4>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-category">
                        <span class="text-success">3</span> new reviews to be approved.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-danger">
                    <a class="nav-link text-white" href="{{ url('/bookings') }}">
                        <h4><i class="material-icons">local_offer</i>
                            Bookings</h4>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-category">
                        <span class="text-success">37</span> new trip bookings.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection