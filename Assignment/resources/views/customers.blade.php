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
    <h1 class="navbar-brand">Customers</h1>
@endsection

@section('content')
    <div style="margin-left:55%;margin-right:5%;">
        <form class="navbar-form">
            <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search for a Customer...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                </button>
            </div>
        </form>
    </div>
    <div class="container-fluid">
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
                                <th>
                                    &nbsp;
                                </th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-info text-center">
                                        7
                                    </td>
                                    <td class="text-center">
                                        Dakota
                                    </td>
                                    <td class="text-center">
                                        M
                                    </td>
                                    <td class="text-center">
                                        Rice
                                    </td>
                                    <td class="text-center">
                                        1234
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Main Street
                                    </td>
                                    <td class="text-center">
                                        Melbourne
                                    </td>
                                    <td class="text-center">
                                        3000
                                    </td>
                                    <td class="text-center">
                                        dmrice@gmail.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0483 028 302
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
                                        8
                                    </td>
                                    <td class="text-center">
                                        Jeff
                                    </td>
                                    <td class="text-center">
                                        T
                                    </td>
                                    <td class="text-center">
                                        Smith
                                    </td>
                                    <td class="text-center">
                                        3928
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Robin Street
                                    </td>
                                    <td class="text-center">
                                        Collingwood
                                    </td>
                                    <td class="text-center">
                                        3066
                                    </td>
                                    <td class="text-center">
                                        jeffsmith@hotmail.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0456 293 494
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
                                        Tyler
                                    </td>
                                    <td class="text-center">
                                        G
                                    </td>
                                    <td class="text-center">
                                        Johnson
                                    </td>
                                    <td class="text-center">
                                        877
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Wellington Street
                                    </td>
                                    <td class="text-center">
                                        Brunswick
                                    </td>
                                    <td class="text-center">
                                        3038
                                    </td>
                                    <td class="text-center">
                                        tjohnson@yahoo.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0439 028 488
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
                                        2
                                    </td>
                                    <td class="text-center">
                                        Cassie
                                    </td>
                                    <td class="text-center">
                                        L
                                    </td>
                                    <td class="text-center">
                                        Finley
                                    </td>
                                    <td class="text-center">
                                        88
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Barkly Street
                                    </td>
                                    <td class="text-center">
                                        Carlton
                                    </td>
                                    <td class="text-center">
                                        3053
                                    </td>
                                    <td class="text-center">
                                        clfinley@hotmail.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0499 329 552
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
                                        3
                                    </td>
                                    <td class="text-center">
                                        Gary
                                    </td>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">
                                        Turner
                                    </td>
                                    <td class="text-center">
                                        10382
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Smith Street
                                    </td>
                                    <td class="text-center">
                                        Fitzroy
                                    </td>
                                    <td class="text-center">
                                        3065
                                    </td>
                                    <td class="text-center">
                                        garyturner@gmail.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0488 399 028
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
                                        4
                                    </td>
                                    <td class="text-center">
                                        Jeannie
                                    </td>
                                    <td class="text-center">
                                        B
                                    </td>
                                    <td class="text-center">
                                        Sampson
                                    </td>
                                    <td class="text-center">
                                        489
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Burnley Street
                                    </td>
                                    <td class="text-center">
                                        Hawthorne
                                    </td>
                                    <td class="text-center">
                                        3078
                                    </td>
                                    <td class="text-center">
                                        jbsampson@hotmail.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0499 298 403
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
                                        5
                                    </td>
                                    <td class="text-center">
                                        Eliza
                                    </td>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">
                                        Worthington
                                    </td>
                                    <td class="text-center">
                                        900
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Broadway Lane
                                    </td>
                                    <td class="text-center">
                                        Prahran
                                    </td>
                                    <td class="text-center">
                                        3049
                                    </td>
                                    <td class="text-center">
                                        eworthington@hotmail.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0414 399 392
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
                                        6
                                    </td>
                                    <td class="text-center">
                                        Con
                                    </td>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">
                                        Metropolis
                                    </td>
                                    <td class="text-center">
                                        930
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        Graham Street
                                    </td>
                                    <td class="text-center">
                                        Melbourne
                                    </td>
                                    <td class="text-center">
                                        3000
                                    </td>
                                    <td class="text-center">
                                        cmetropolis@yahoo.com
                                    </td>
                                    <td nowrap="true" class="text-center">
                                        0499 930 288
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