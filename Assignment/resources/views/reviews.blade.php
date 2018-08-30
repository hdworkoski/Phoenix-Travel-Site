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
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/vehicles') }}">
            <i class="material-icons">directions_car</i>
            <p>Vehicles</p>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/reviews') }}">
            <i class="material-icons">rate_review</i>
            <p>Reviews</p>
        </a>
    </li>
@endsection

@section('title')
    <h1 class="navbar-brand">Reviews</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">New Reviews</h4>
                        <p class="card-category">Reviews to be approved</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Trip ID
                                </th>
                                <th class="text-center">
                                    Customer ID
                                </th>
                                <th class="text-center">
                                    Rating
                                </th>
                                <th class="text-center">
                                    General Feedback
                                </th>
                                <th class="text-center">
                                    Likes
                                </th>
                                <th class="text-center">
                                    Dislikes
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
                                        1234567
                                    </td>
                                    <td class="text-center">
                                        123456789
                                    </td>
                                    <td class="text-center">
                                        4
                                    </td>
                                    <td class="text-center">
                                        Great trip. Hotel could have been better.
                                    </td>
                                    <td class="text-center">
                                        Tour guide
                                    </td>
                                    <td class="text-center">
                                        Hotel
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-success">check</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">cancel</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        3820483
                                    </td>
                                    <td class="text-center">
                                        482927394
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        Amazing trip!
                                    </td>
                                    <td class="text-center">
                                        Everything
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-success">check</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">cancel</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info text-center">
                                        3920473
                                    </td>
                                    <td class="text-center">
                                        103829472
                                    </td>
                                    <td class="text-center">
                                        3
                                    </td>
                                    <td class="text-center">
                                        Trip was ok. Food was not good.
                                    </td>
                                    <td class="text-center">
                                        Hotel, Bus
                                    </td>
                                    <td class="text-center">
                                        Food
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-success">check</i>
                                    </td>
                                    <td class="text-center">
                                        <i class="material-icons text-danger">cancel</i>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Existing Reviews</h4>
                        <p class="card-category">All Review Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Trip ID
                                </th>
                                <th class="text-center">
                                    Customer ID
                                </th>
                                <th class="text-center">
                                    Rating
                                </th>
                                <th class="text-center">
                                    General Feedback
                                </th>
                                <th class="text-center">
                                    Likes
                                </th>
                                <th class="text-center">
                                    Dislikes
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
                                        2984040
                                    </td>
                                    <td class="text-center">
                                        502058385
                                    </td>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="text-center">
                                        Bad trip!
                                    </td>
                                    <td class="text-center">
                                        None
                                    </td>
                                    <td class="text-center">
                                        Everything
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
                                        3820483
                                    </td>
                                    <td class="text-center">
                                        482927394
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        Amazing trip!
                                    </td>
                                    <td class="text-center">
                                        Everything
                                    </td>
                                    <td class="text-center">
                                        None
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
                                        3820483
                                    </td>
                                    <td class="text-center">
                                        482927394
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        Amazing trip!
                                    </td>
                                    <td class="text-center">
                                        Everything
                                    </td>
                                    <td class="text-center">
                                        None
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
                                        3820483
                                    </td>
                                    <td class="text-center">
                                        482927394
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        Amazing trip!
                                    </td>
                                    <td class="text-center">
                                        Everything
                                    </td>
                                    <td class="text-center">
                                        None
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
                                        3820483
                                    </td>
                                    <td class="text-center">
                                        482927394
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        Amazing trip!
                                    </td>
                                    <td class="text-center">
                                        Everything
                                    </td>
                                    <td class="text-center">
                                        None
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
                                        3820483
                                    </td>
                                    <td class="text-center">
                                        482927394
                                    </td>
                                    <td class="text-center">
                                        5
                                    </td>
                                    <td class="text-center">
                                        Amazing trip!
                                    </td>
                                    <td class="text-center">
                                        Everything
                                    </td>
                                    <td class="text-center">
                                        None
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