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
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/staff') }}">
            <i class="material-icons">work</i>
            <p>Staff</p>
        </a>
    </li>
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
    <div style="margin-left:55%;margin-right:5%;">
        <div class="justify-content-end">
            <form class="form-search justify-content-end">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search for a Vehicle...">
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
                                <tr>
                                    <td class="text-info text-center">
                                        39ejd9
                                    </td>
                                    <td class="text-center">
                                        2038398493
                                    </td>
                                    <td class="text-center">
                                        Mitsubishi
                                    </td>
                                    <td class="text-center">
                                        Rosa
                                    </td>
                                    <td class="text-center">
                                        2014
                                    </td>
                                    <td class="text-center">
                                        25
                                    </td>
                                    <td class="text-center">
                                        Regular
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Bus License
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
                                        39ejd9
                                    </td>
                                    <td class="text-center">
                                        2038398493
                                    </td>
                                    <td class="text-center">
                                        Mitsubishi
                                    </td>
                                    <td class="text-center">
                                        Rosa
                                    </td>
                                    <td class="text-center">
                                        2014
                                    </td>
                                    <td class="text-center">
                                        25
                                    </td>
                                    <td class="text-center">
                                        Regular
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Bus License
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
                                        39ejd9
                                    </td>
                                    <td class="text-center">
                                        2038398493
                                    </td>
                                    <td class="text-center">
                                        Mitsubishi
                                    </td>
                                    <td class="text-center">
                                        Rosa
                                    </td>
                                    <td class="text-center">
                                        2014
                                    </td>
                                    <td class="text-center">
                                        25
                                    </td>
                                    <td class="text-center">
                                        Regular
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Bus License
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
                                        39ejd9
                                    </td>
                                    <td class="text-center">
                                        2038398493
                                    </td>
                                    <td class="text-center">
                                        Mitsubishi
                                    </td>
                                    <td class="text-center">
                                        Rosa
                                    </td>
                                    <td class="text-center">
                                        2014
                                    </td>
                                    <td class="text-center">
                                        25
                                    </td>
                                    <td class="text-center">
                                        Regular
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Bus License
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
                                        39ejd9
                                    </td>
                                    <td class="text-center">
                                        2038398493
                                    </td>
                                    <td class="text-center">
                                        Mitsubishi
                                    </td>
                                    <td class="text-center">
                                        Rosa
                                    </td>
                                    <td class="text-center">
                                        2014
                                    </td>
                                    <td class="text-center">
                                        25
                                    </td>
                                    <td class="text-center">
                                        Regular
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Bus License
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
                                        39ejd9
                                    </td>
                                    <td class="text-center">
                                        2038398493
                                    </td>
                                    <td class="text-center">
                                        Mitsubishi
                                    </td>
                                    <td class="text-center">
                                        Rosa
                                    </td>
                                    <td class="text-center">
                                        2014
                                    </td>
                                    <td class="text-center">
                                        25
                                    </td>
                                    <td class="text-center">
                                        Regular
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Bus License
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