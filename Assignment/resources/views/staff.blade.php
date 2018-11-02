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
    <li class="nav-item active">
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
    <h1 class="navbar-brand">Staff</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <a class="text-white" href="{{ url('/staff/add/new') }}"><button class="btn btn-default pull-left">Add New Staff Member</button></a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Staff</h4>
                        <p class="card-category">All Staff Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-info">
                                <th class="text-center">
                                    Staff ID
                                </th>
                                <th class="text-center">
                                    Position
                                </th>
                                <th class="text-center">
                                    First Name
                                </th>
                                <th class="text-center">
                                    Middle Initial
                                </th>
                                <th class="text-center">
                                    Last Name
                                </th>
                                <th class="text-center">
                                    Street Number
                                </th>
                                <th class="text-center">
                                    Street Name
                                </th>
                                <th class="text-center">
                                    Suburb
                                </th>
                                <th class="text-center">
                                    Postcode
                                </th>
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Phone
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                <th class="text-center">
                                    &nbsp;
                                </th>
                                </thead>
                                <tbody>
                                @foreach ($staff as $s)
                                    <tr>
                                        <td class="text-info text-center">
                                            <div>{{ $s->Staff_id }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Position }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->First_Name }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Middle_Initial }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Last_Name }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Street_No }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Street_Name }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Suburb }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Postcode }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Email }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div>{{ $s->Phone }}</div>
                                        </td>
                                        <td class="text-center">
                                            <form action="/staff/{{ $s->Staff_id }}/{{ $s->Email }}" method="GET">
                                                {{ csrf_field() }}
                                                {{ method_field('UPDATE') }}

                                                <button type="submit" class="btn bg-white">
                                                    <i class="material-icons text-success">edit</i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="/staff/{{ $s->Staff_id }}/{{ $s->Email }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn bg-white btnDeleteStaff">
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
    </div>
@endsection