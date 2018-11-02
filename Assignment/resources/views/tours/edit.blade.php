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
    <h1 class="navbar-brand">Tours</h1>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Edit Tour</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('tour/update') }}" method="POST" class="form-horizontal">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="Tour_No" class="col-sm-3 control-label" hidden>Tour Number</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Tour_No" id="Tour_No" class="form-control" value="{{ $tour->Tour_No }}" hidden>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Tour_Name" class="col-sm-3 control-label">Tour Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Tour_Name" id="Tour_Name" class="form-control" value="{{ $tour->Tour_Name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Description" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-11">
                                    <input type="text" name="Description" id="Description" class="form-control" value="{{ $tour->Description }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Duration" class="col-sm-3 control-label">Duration</label>
                                <div class="col-sm-2">
                                    <input type="text" name="Duration" id="Duration" class="form-control" value="{{ $tour->Duration }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Route_Map" class="col-sm-3 control-label">Route Map</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Route_Map" id="Route_Map" class="form-control" value="{{ $tour->Route_Map }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">Save Tour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a class="text-white" href="{{ url('/tours') }}"><button class="btn btn-default pull-left">Back to Tours</button></a>
        </div>
    </div>
@endsection