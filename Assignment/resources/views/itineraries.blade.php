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
    <h1 class="navbar-brand">Tour Itinerary</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
        @if($tour)
            @if($add == 0)
        <form action="/itineraries/{{ $tour }}/add" method="GET">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">Add Itinerary For Tour #{{ $tour }}</button>
        </form>
            @endif
        @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Tour #{{ $tour }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name:</h4><p>{{ $t[0]->Tour_Name }}</p>
                        <h4>Description:</h4><p>{{ $t[0]->Description }}</p>
                        <h4>Duration:</h4><p>{{ $t[0]->Duration }}</p>
                        <h4>Route Map:</h4><p>{{ $t[0]->Route_Map }}</p>
                    </div>
                </div>
            </div>
        </div>
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
                                <th class="text-center">
                                    Itinerary ID
                                </th>
                                <th class="text-center">
                                    Tour Number
                                </th>
                                <th class="text-center">
                                    Day Number
                                </th>
                                <th class="text-center">
                                    Hotel Booking Number
                                </th>
                                <th class="text-center">
                                    Activities
                                </th>
                                <th class="text-center">
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
                                @foreach($itineraries as $i)
                                <tr>
                                    <td class="text-info text-center">
                                        {{ $i->id }}
                                    </td>
                                    <td class="text-center">
                                        {{ $i->Tour_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $i->Day_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $i->Hotel_Booking_No }}
                                    </td>
                                    <td class="text-center">
                                        {{ $i->Activities }}
                                    </td>
                                    <td class="text-center">
                                        {{ $i->Meals }}
                                    </td>
                                    <td class="text-center">
                                        <form action="/itinerary/edit/{{ $i->id }}" method="GET">
                                            {{ csrf_field() }}
                                            {{ method_field('UPDATE') }}

                                            <button type="submit" class="btn bg-white">
                                                <i class="material-icons text-success">edit</i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="/itineraries/{{ $i->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn bg-white btnDeleteItinerary">
                                                <i class="material-icons text-danger">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @if($add > 0)
                                    <tr>
                                        <form action="{{ action('ItineraryController@commit') }}" method="POST" class="form-horizontal">
                                        {!! csrf_field() !!}
                                        <td class="text-info text-center">
                                            &nbsp;
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                            <input type="number" name="Tour_No" id="Tour_No" class="form-control" value="{{ $tour }}" hidden>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                            <input type="number" name="Day_No" id="Day_No" class="form-control" placeholder="Day Number">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                            <input type="text" name="Hotel_Booking_No" id="Hotel_Booking_No" class="form-control" placeholder="Hotel Booking Number">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                            <input type="text" name="Activities" id="Activities" class="form-control" placeholder="Activities">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                            <input type="text" name="Meals" id="Meals" class="form-control" placeholder="Meals">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn bg-white">
                                                <i class="material-icons text-success">check</i>
                                            </button>
                                            </div>
                                        </td></form>
                                        <form action="/itineraries/{{ $tour }}" method="GET">
                                        <td class="text-center">
                                            <button type="submit" class="btn bg-white">
                                                <i class="material-icons text-danger">cancel</i>
                                            </button>
                                        </td>
                                        </form>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a class="text-white" href="{{ url('/tours') }}"><button class="btn btn-info pull-left btn-default">Back to Tours</button></a>
        </div>
    </div>
@endsection