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
    <li class="nav-item active">
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
    <h1 class="navbar-brand">Vehicles</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Vehicles</h4>
                        <p class="card-category">All Vehicle Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Rego Number
                                </th>
                                <th class="text-center">
                                    VIN
                                </th>
                                <th class="text-center">
                                    Make
                                </th>
                                <th class="text-center">
                                    Model
                                </th>
                                <th class="text-center">
                                    Year
                                </th>
                                <th class="text-center">
                                    Capacity
                                </th>
                                <th class="text-center">
                                    Fuel Type
                                </th>
                                <th class="text-center">
                                    Equipment
                                </th>
                                <th class="text-center">
                                    License Required
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                </thead>
                                <tbody>
                                @foreach($vehicles as $v)
                                <tr>
                                    <td class="text-info text-center">
                                        {{ $v->Rego_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->VIN }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Make }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Model }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Year }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Capacity }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Fuel_Type }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Equipment }}
                                    </td>
                                    <td class="text-center">
                                        {{ $v->Licence_Required }}
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
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