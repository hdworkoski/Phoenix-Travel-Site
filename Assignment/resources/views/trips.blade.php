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
    <h1 class="navbar-brand">Trips</h1>
@endsection

@section('content')
    <div class="container-fluid">
        @if($error == 1)
            <div class="badge-danger">
                You cannot delete a trip that has associated bookings.
            </div>
        @endif
            <div class="row">
                <a class="text-white" href="{{ url('/trip') }}"><button class="btn btn-default pull-left">Add New Trip</button></a>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Trips</h4>
                        <p class="card-category">All Trip Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Trip ID
                                </th>
                                <th class="text-center">
                                    Tour Number
                                </th>
                                <th class="text-center">
                                    Vehicle Rego Number
                                </th>
                                <th class="text-center">
                                    Departure Date
                                </th>
                                <th class="text-center">
                                    Max Passengers
                                </th>
                                <th class="text-center">
                                    Standard Amount
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                </thead>
                                <tbody>
                                @foreach($trips as $t)
                                <tr>
                                    <td class="text-center">
                                        <form action="/trip/view/{{ $t->Trip_Id }}" method="GET">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-white text-info">
                                                {{ $t->Trip_Id }}
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        {{ $t->Tour_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $t->Rego_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $t->Departure_Date }}
                                    </td>
                                    <td class="text-center">
                                        {{ $t->Max_Passengers }}
                                    </td>
                                    <td class="text-center">
                                        ${{ $t->Standard_Amount }}
                                    </td>
                                    <td class="text-center">
                                        <form action="/trip/{{ $t->Trip_Id }}" method="GET">
                                            {{ csrf_field() }}
                                            {{ method_field('UPDATE') }}

                                            <button type="submit" class="btn bg-white">
                                                <i class="material-icons text-success">edit</i>
                                            </button>
                                        </form>
                                    </td>
                                    <form action="/trip/{{ $t->Trip_Id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-white btnDeleteTrip">
                                                <i class="material-icons text-danger">delete</i>
                                            </button>
                                        </td>
                                    </form>
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