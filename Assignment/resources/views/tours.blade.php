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
@if (count($tour) > 0)
    <div class="container-fluid">
        @if($error == 1)
            <div class="badge-danger">
                You cannot delete a tour that has associated trips or itineraries.
            </div>
        @endif
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
                                @foreach ($tour as $t)
                                    <tr>
                                        <td class="text-info text-center">
                                            <div>{{ $t->Tour_No }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $t->Tour_Name }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $t->Description }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $t->Duration }}</div> Days
                                        </td>
                                        <td class="text-center">
                                            <div>{{ str_limit($t->Route_Map, $limit = 20, $end = '...') }}</div>
                                        </td>
                                        <td class="text-center">
                                            <form action="/itineraries/{{ $t->Tour_No }}" method="GET">
                                                {{ csrf_field() }}

                                                <button type="submit" class="btn bg-white">
                                                    <i class="material-icons text-warning">schedule</i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="/tour/{{ $t->Tour_No }}" method="GET">
                                                {{ csrf_field() }}
                                                {{ method_field('UPDATE') }}

                                                <button type="submit" class="btn bg-white">
                                                    <i class="material-icons text-success">edit</i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="/tour/{{ $t->Tour_No }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn bg-white btnDeleteTour">
                                                    <i class="material-icons text-danger">delete</i>
                                                </button>
                                            </form>
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
        <div class="row">
            <a class="text-white" href="{{ url('/tour') }}"><button class="btn btn-default pull-left">Add New Tour</button></a>
            &nbsp;
            <a class="text-white" href="{{ url('/tours/departures') }}"><button class="btn btn-default">View Tour Departures</button></a>
        </div>
    </div>
@endif
@endsection