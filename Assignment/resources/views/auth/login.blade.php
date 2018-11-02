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
    <div style="margin-left:20%;margin-right:20%;margin-top:10%;">
        <div class="card text-center">
            <div class="card-header card-header-info">
                Staff Log In
            </div>
            <div class="card-body text-center">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="input-group-prepend col col-sm-1">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </div>
                            <div class="col col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="input-group-prepend col col-sm-1">
                                <span class="input-group-text">
                                    <i class="material-icons">lock</i>
                                </span>
                            </div>
                            <div class="col col-md-10">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default">
                                Login
                            </button>
                            <br/>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection