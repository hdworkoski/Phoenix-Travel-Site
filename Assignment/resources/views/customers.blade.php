@extends('layouts.app')

@section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item active">
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
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/reviews') }}">
            <i class="material-icons">rate_review</i>
            <p>Reviews</p>
        </a>
    </li>
@endsection

@section('title')
    <h1 class="navbar-brand">Customers</h1>
@endsection

@section('content')
<div class="container-fluid">
    @if($e == 1)
        <div class="badge-danger">
            You cannot delete a customer that has associated bookings.
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Registered Customers</h4>
                    <p class="card-category">Customers to be approved</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-info">
                            <th class="text-center">
                                ID
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
                            <th>
                                &nbsp;
                            </th>
                            @if(\Illuminate\Support\Facades\Auth::user()->role == 'manager')
                            <th>
                                &nbsp;
                            </th>
                            @endif
                            </thead>
                            <tbody>
                            @foreach ($customerNew as $cN)
                            <tr>
                                <td class="text-info text-center">
                                    <div>{{ $cN->Customer_id }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->First_Name }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->Middle_Initial }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->Last_Name }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->Street_No }}</div>
                                </td>
                                <td nowrap="true" class="text-center">
                                    <div>{{ $cN->Street_Name }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->Suburb }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->Postcode }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cN->Email }}</div>
                                </td>
                                <td nowrap="true" class="text-center">
                                    <div>{{ $cN->Phone }}</div>
                                </td>
                                <form action="customer/approve/{{ $cN->Customer_id }} " method="POST">
                                    {!! csrf_field() !!}
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-white">
                                            <i class="material-icons text-success">check</i>
                                        </button>
                                    </td>
                                </form>
                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'manager')
                                <form action="/customer/{{ $cN->Customer_id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-white btnDeleteCustomer">
                                            <i class="material-icons text-danger">cancel</i>
                                        </button>
                                    </td>
                                </form>
                                @endif
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Existing Customers</h4>
                    <p class="card-category">All Customer Details</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-info">
                            <th class="text-center">
                                ID
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
                            @if(\Illuminate\Support\Facades\Auth::user()->role == 'manager')
                            <th class="text-center">
                                &nbsp;
                            </th>
                            <th class="text-center">
                                &nbsp;
                            </th>
                            @endif
                            </thead>
                            <tbody>
                            @foreach($customerReg as $cR)
                            <tr>
                                <td class="text-info text-center">
                                    <div>{{ $cR->Customer_id }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->First_Name }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->Middle_Initial }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->Last_Name }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->Street_No }}</div>
                                </td>
                                <td nowrap="true" class="text-center">
                                    <div>{{ $cR->Street_Name }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->Suburb }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->Postcode }}</div>
                                </td>
                                <td class="text-center">
                                    <div>{{ $cR->Email }}</div>
                                </td>
                                <td nowrap="true" class="text-center">
                                    <div>{{ $cR->Phone }}</div>
                                </td>
                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'manager')
                                <td class="text-center">
                                    <form action="/customer/{{ $cR->Customer_id }}" method="GET">
                                        {{ csrf_field() }}
                                        {{ method_field('UPDATE') }}
                                        <button type="submit" class="btn btn-white">
                                            <i class="material-icons text-success">edit</i>
                                        </button>
                                    </form>
                                </td>
                                </form>
                                <td class="text-center">
                                    <form action="/customer/{{ $cR->Customer_id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-white btnDeleteCustomer">
                                            <i class="material-icons text-danger">delete</i>
                                        </button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(\Illuminate\Support\Facades\Auth::user()->role == 'manager')
    <div class="row">
        <a class="text-white" href="{{ url('/customer') }}"><button class="btn btn-default pull-left">Add New Customer</button></a>
    </div>
    @endif
</div>
@endsection