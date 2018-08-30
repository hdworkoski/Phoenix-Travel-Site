@extends('layouts.app')

@section('sidebar')
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/login') }}">
            <i class="material-icons">person</i>
            <p>Staff Log In</p>
        </a>
    </li>
@endsection

@section('title')
    <h1 class="navbar-brand">Log In</h1>
@endsection

@section('content')
    <div style="margin-left:20%;margin-right:20%;margin-top:20%;">
    <div class="card card-nav-tabs text-center">
        <div class="card-header card-header-info">
            Staff Log In
        </div>
        <div class="card-body">
            <p class="text-left">
                <div class="input-group"">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">person</i>
                        </span>
                    </div>
                        <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">lock</i>
                        </span>
                </div>
                <input type="password" class="form-control" placeholder="Password">
                </div>
            </p>
            <a href="{{ url('/dashboard') }}" class="btn btn-info">Log In</a>
        </div>
    </div></div>
@endsection