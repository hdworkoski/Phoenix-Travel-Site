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
    <h1 class="navbar-brand">Trip Details</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <a class="text-white" href="{{ url('/trips') }}"><button class="btn btn-default pull-left">Back to Trips</button></a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Trip #{{ $t->Trip_Id }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Vehicle:</h4><p>{{ $t->Rego_No }}</p>
                        <h4>Departure Date:</h4><p>{{ $t->Departure_Date }}</p>
                        <h4>Max Passengers:</h4><p>{{ $t->Max_Passengers }}</p>
                        <h4>Standard Amount:</h4><p>{{ $t->Standard_Amount}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Tour #{{ $tour->Tour_No }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name:</h4><p>{{ $tour->Tour_Name }}</p>
                        <h4>Description:</h4><p>{{ $tour->Description }}</p>
                        <h4>Duration:</h4><p>{{ $tour->Duration }}</p>
                        <h4>Route Map:</h4><p>{{ $tour->Route_Map }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Customer List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Customer ID
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Number on Booking
                                </th>
                                <th class="text-center">
                                    Deposit Amount
                                </th>
                                </thead>
                                <tbody>
                                @foreach($customers as $c)
                                <tr>
                                    <td class="text-info text-center">{{ $c->Customer_id }}</td>
                                    <td class="text-center">{{ $c->First_Name }} {{ $c->Middle_Initial }} {{ $c->Last_Name }}</td>
                                    <td class="text-center">{{ $c->Number_Of_Bookings }}</td>
                                    <td class="text-center">{{ $c->Deposit_Amount }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection