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
        &nbsp;
        <a href="/reviews/trips" class="btn btn-default">Review Statistics - Trips</a>&nbsp;&nbsp;
        <a href="/reviews/tours" class="btn btn-default">Review Statistics - Tours</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Customer Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-info">
                                <th class="text-center">
                                    Review ID
                                </th>
                                <th class="text-center">
                                    Trip Booking Number
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
                            </thead>
                            <tbody>
                            @foreach($reviews as $r)
                                <tr>
                                    <td class="text-info text-center">
                                        {{ $r->Review_id }}
                                    </td>
                                    <td class="text-center">
                                        {{ $r->Trip_Booking_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $r->Rating }}
                                    </td>
                                    <td class="text-center">
                                        {{ $r->General_Feedback }}
                                    </td>
                                    <td class="text-center">
                                        {{ $r->Likes }}
                                    </td>
                                    <td class="text-center">
                                        {{ $r->Dislikes }}
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