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
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/staff') }}">
            <i class="material-icons">work</i>
            <p>Staff</p>
        </a>
    </li>
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
    <h1 class="navbar-brand">Tour Itinerary</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Tour Itinerary</h4>
                        <p class="card-category">Itinerary Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th>
                                    Itinerary ID
                                </th>
                                <th>
                                    Tour Number
                                </th>
                                <th>
                                    Day Number
                                </th>
                                <th>
                                    Activities
                                </th>
                                <th>
                                    Meals
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-info">
                                        1234567890
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Check in to hotel.
                                    </td>
                                    <td>
                                        Dinner at the hotel restaurant.
                                    </td>
                                    <td>
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td>
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">
                                        3820472048
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Museum.
                                    </td>
                                    <td>
                                        Breakfast at hotel, lunch at museum, dinner at pub.
                                    </td>
                                    <td>
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td>
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">
                                        1038492734
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        Park.
                                    </td>
                                    <td>
                                        Breakfast at hotel, lunch in city, dinner at hotel.
                                    </td>
                                    <td>
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td>
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">
                                        3928403829
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        Football game.
                                    </td>
                                    <td>
                                        Breakfast at hotel, lunch at stadium, dinner at pub.
                                    </td>
                                    <td>
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td>
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">
                                        4028392839
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        Wineries.
                                    </td>
                                    <td>
                                        Breakfast at hotel, lunch at winery, no dinner included.
                                    </td>
                                    <td>
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td>
                                        <i class="material-icons text-danger">delete</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">
                                        4028374937
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        Check out of hotel.
                                    </td>
                                    <td>
                                        Breakfast at hotel.
                                    </td>
                                    <td>
                                        <i class="material-icons text-gray">edit</i>
                                    </td>
                                    <td>
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
        <div class="row">
            <a class="text-white" href="{{ url('/tours') }}"><button class="btn btn-info pull-left">Back to Tours</button></a>
        </div>
    </div>
@endsection