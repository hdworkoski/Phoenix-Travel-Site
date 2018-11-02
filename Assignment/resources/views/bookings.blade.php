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
    <li class="nav-item active">
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
    <h1 class="navbar-brand">Bookings</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Bookings</h4>
                        <p class="card-category">All Booking Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Booking Number
                                </th>
                                <th class="text-center">
                                    Trip ID
                                </th>
                                <th class="text-center">
                                    Primary Customer ID
                                </th>
                                <th class="text-center">
                                    Number of Bookings
                                </th>
                                <th class="text-center">
                                    Booking Date
                                </th>
                                <th class="text-center">
                                    Deposit Amount
                                </th>
                                <th class="text-center">
                                    Total Amount
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-info text-center">
                                        12345678
                                    </td>
                                    <td class="text-center">
                                        9382984
                                    </td>
                                    <td class="text-center">
                                        4
                                    </td>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="text-center">
                                        08/04/18
                                    </td>
                                    <td class="text-center">
                                        $50
                                    </td>
                                    <td class="text-center">
                                        $500
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        12345678
                                    </td>
                                    <td class="text-center">
                                        9382984
                                    </td>
                                    <td class="text-center">
                                        3
                                    </td>
                                    <td class="text-center">
                                        4
                                    </td>
                                    <td class="text-center">
                                        08/04/18
                                    </td>
                                    <td class="text-center">
                                        $50
                                    </td>
                                    <td class="text-center">
                                        $500
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        12345678
                                    </td>
                                    <td class="text-center">
                                        9382984
                                    </td>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        08/04/18
                                    </td>
                                    <td class="text-center">
                                        $50
                                    </td>
                                    <td class="text-center">
                                        $500
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        12345678
                                    </td>
                                    <td class="text-center">
                                        9382984
                                    </td>
                                    <td class="text-center">
                                        6
                                    </td>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td class="text-center">
                                        08/04/18
                                    </td>
                                    <td class="text-center">
                                        $50
                                    </td>
                                    <td class="text-center">
                                        $500
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        12345678
                                    </td>
                                    <td class="text-center">
                                        9382984
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        4
                                    </td>
                                    <td class="text-center">
                                        08/04/18
                                    </td>
                                    <td class="text-center">
                                        $50
                                    </td>
                                    <td class="text-center">
                                        $500
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        12345678
                                    </td>
                                    <td class="text-center">
                                        9382984
                                    </td>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="text-center">
                                        6
                                    </td>
                                    <td class="text-center">
                                        08/04/18
                                    </td>
                                    <td class="text-center">
                                        $50
                                    </td>
                                    <td class="text-center">
                                        $500
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection