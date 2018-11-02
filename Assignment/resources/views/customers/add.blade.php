@extends('layouts.app')

@section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item active">
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
    <h1 class="navbar-brand">Customers</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Add New Customer</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('customer') }}" method="POST" class="form-horizontal">
                            {!! csrf_field() !!}
                            <br/>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="First_Name" class="col-sm-8 control-label">First Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="First_Name" id="First_Name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="Middle_Initial" class="col-sm-8 control-label">Middle Initial</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="Middle_Initial" id="Middle_Initial" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Last_Name" class="col-sm-8 control-label">Last Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="Last_Name" id="Last_Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Street_No" class="col-sm-8 control-label">Street Number</label>
                                        <div class="col-sm-4">
                                            <input type="number" name="Street_No" id="Street_No" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="Street_Name" class="col-sm-8 control-label">Street Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="Street_Name" id="Street_Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Suburb" class="col-sm-8 control-label">Suburb</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="Suburb" id="Suburb" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="Postcode" class="col-sm-8 control-label">Postcode</label>
                                        <div class="col-sm-4">
                                            <input type="number" name="Postcode" id="Postcode" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>

                            <div class="form-group">
                                <label for="Email" class="col-sm-8 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="Email" id="Email" class="form-control">
                                </div>
                            </div><br/>

                            <div class="form-group">
                                <label for="Phone" class="col-sm-8 control-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" name="Phone" id="Phone" class="form-control">
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Password" class="col-sm-8 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="Password" id="Password" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="confPassword" class="col-sm-8 control-label">Confirm Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="confPassword" id="confPassword" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br/>

                            <div class="form-check form-check-radio">
                                <label for="AuthCustomer" class="col-sm-3">Authorized Customer?</label>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="AuthCustomer" id="AuthCustomer1" value="1" checked>
                                        Yes
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>&nbsp;&nbsp;
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="AuthCustomer" id="AuthCustomer2" value="0">
                                        No
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div><br/>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">Add Customer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a class="text-white" href="{{ url('/customers') }}"><button class="btn btn-default pull-left">Back to Customers</button></a>
        </div>
    </div>
@endsection