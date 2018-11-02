@extends('layouts.app')

@section('sidebar')
    <li class="nav-item">
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
    <li class="nav-item active">
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
    <h1 class="navbar-brand">Edit Itinerary</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Edit Itinerary</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/itineraries/update') }}" method="POST" class="form-horizontal">
                            {!! csrf_field() !!}

                            <div class="text-center">
                                <input type="number" name="id" id="id" class="form-control" value="{{ $i->id }}" hidden>
                            </div>
                            <div class="text-center">
                                <input type="number" name="Tour_No" id="Tour_No" class="form-control" value="{{ $i->Tour_No }}" hidden>
                            </div>
                            <div class="text-center">
                                <input type="number" name="Day_No" id="Day_No" class="form-control" value="{{ $i->Day_No }}" placeholder="Day Number">
                            </div>
                            <div class="text-center">
                                <input type="text" name="Hotel_Booking_No" id="Hotel_Booking_No" class="form-control"value="{{ $i->Hotel_Booking_No }}"  placeholder="Hotel Booking Number">
                            </div>
                            <div class="text-center">
                                <input type="text" name="Activities" id="Activities" class="form-control" value="{{ $i->Activities }}" placeholder="Activities">
                            </div>
                            <div class="text-center">
                                <input type="text" name="Meals" id="Meals" class="form-control" value="{{ $i->Meals }}" placeholder="Meals">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">
                                    Save Itinerary
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="/itineraries/{{ $i->Tour_No }}" method="GET">
                {{ csrf_field() }}

                <button type="submit" class="btn btn-default">
                    Back to Itineraries
                </button>
            </form>
        </div>
    </div>
@endsection