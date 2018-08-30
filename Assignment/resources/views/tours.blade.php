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
    <h1 class="navbar-brand">Tours</h1>
@endsection

@section('content')
    <div style="margin-left:55%;margin-right:5%;">
        <div class="justify-content-end">
        <form class="form-search justify-content-end">
            <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search for a Tour...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                </button>
            </div>
        </form>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Tours</h4>
                        <p class="card-category">All Tour Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Tour Number
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Description
                                </th>
                                <th class="text-center">
                                    Duration
                                </th>
                                <th class="text-center">
                                    Route Map
                                </th>
                                <th class="text-center">
                                    Itinerary
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
                                        1
                                    </td>
                                    <td class="text-center">
                                        Canberra
                                    </td>
                                    <td class="text-center">
                                        This tour goes to many places around Canberra including the Parliament building and the National Gallery.
                                    </td>
                                    <td class="text-center">
                                        7 days
                                    </td>
                                    <td class="text-center">
                                        CanberraRouteMap.pdf
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="{{ url('/itineraries') }}">
                                            <i class="material-icons text-success">schedule</i>
                                        </a>
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
                                        1
                                    </td>
                                    <td class="text-center">
                                        Canberra
                                    </td>
                                    <td class="text-center">
                                        This tour goes to many places around Canberra including the Parliament building and the National Gallery.
                                    </td>
                                    <td class="text-center">
                                        7 days
                                    </td>
                                    <td class="text-center">
                                        CanberraRouteMap.pdf
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="{{ url('/itineraries') }}">
                                            <i class="material-icons text-success">schedule</i>
                                        </a>
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
                                        1
                                    </td>
                                    <td class="text-center">
                                        Canberra
                                    </td>
                                    <td class="text-center">
                                        This tour goes to many places around Canberra including the Parliament building and the National Gallery.
                                    </td>
                                    <td class="text-center">
                                        7 days
                                    </td>
                                    <td class="text-center">
                                        CanberraRouteMap.pdf
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="{{ url('/itineraries') }}">
                                            <i class="material-icons text-success">schedule</i>
                                        </a>
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
                                        1
                                    </td>
                                    <td class="text-center">
                                        Canberra
                                    </td>
                                    <td class="text-center">
                                        This tour goes to many places around Canberra including the Parliament building and the National Gallery.
                                    </td>
                                    <td class="text-center">
                                        7 days
                                    </td>
                                    <td class="text-center">
                                        CanberraRouteMap.pdf
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="{{ url('/itineraries') }}">
                                            <i class="material-icons text-success">schedule</i>
                                        </a>
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
                                        1
                                    </td>
                                    <td class="text-center">
                                        Canberra
                                    </td>
                                    <td class="text-center">
                                        This tour goes to many places around Canberra including the Parliament building and the National Gallery.
                                    </td>
                                    <td class="text-center">
                                        7 days
                                    </td>
                                    <td class="text-center">
                                        CanberraRouteMap.pdf
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="{{ url('/itineraries') }}">
                                            <i class="material-icons text-success">schedule</i>
                                        </a>
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
                                        1
                                    </td>
                                    <td class="text-center">
                                        Canberra
                                    </td>
                                    <td class="text-center">
                                        This tour goes to many places around Canberra including the Parliament building and the National Gallery.
                                    </td>
                                    <td class="text-center">
                                        7 days
                                    </td>
                                    <td class="text-center">
                                        CanberraRouteMap.pdf
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="{{ url('/itineraries') }}">
                                            <i class="material-icons text-success">schedule</i>
                                        </a>
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