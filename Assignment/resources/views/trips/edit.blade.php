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
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/tours') }}">
            <i class="material-icons">directions_bus</i>
            <p>Tours</p>
        </a>
    </li>
    <li class="nav-item active">
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
    <h1 class="navbar-brand">Trips</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <a class="text-white" href="{{ url('/trips') }}"><button class="btn btn-default pull-left">Back to Trips</button></a>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Trips</h4>
                        <p class="card-category">Edit Trip #{{ $trip->Trip_Id }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('trip/update') }}" method="POST" class="form-horizontal">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="Trip_Id" class="col-sm-3 control-label" hidden>Trip ID</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Trip_Id" id="Trip_Id" class="form-control" value="{{ $trip->Trip_Id }}" hidden>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="selTour">Tour</label>
                                <select class="form-control" id="selTour" name="selTour">
                                    @foreach($tours as $t)
                                        <option value="{{ $t->Tour_No }}"
                                        @if($trip->Tour_No == $t->Tour_No)
                                            selected
                                        @endif
                                        >{{ $t->Tour_No }} : {{ $t->Tour_Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="selVehicle">Vehicle</label>
                                <select class="form-control" id="selVehicle" name="selVehicle">
                                    @foreach($vehicles as $v)
                                        <option value="{{ $v->Rego_No }}"
                                        @if($trip->Rego_No == $v->Rego_No)
                                            selected
                                        @endif
                                        >{{ $v->Rego_No }} : {{ $v->Make }} {{ $v->Model }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="Departure_Date" class="col-sm-12 control-label">Departure Date</label>
                                    <input type="date" name="Departure_Date" id="Departure_Date" class="form-control" value="{{ $trip->Departure_Date }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="Max_Passengers" class="col-sm-12 control-label">Max Passengers</label>
                                    <input type="number" name="Max_Passengers" id="Max_Passengers" class="form-control" value="{{ $trip->Max_Passengers }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="Standard_Amount" class="col-sm-12 control-label">Standard Amount</label>
                                    <input type="number" name="Standard_Amount" id="Standard_Amount" class="form-control" value="{{ $trip->Standard_Amount }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">Save Trip</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection