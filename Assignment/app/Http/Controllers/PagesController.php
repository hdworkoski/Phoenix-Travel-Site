<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function customers() {
        return view('customers');
    }

    public function tours() {
        return view('tours');
    }

    public function trips() {
        return view('trips');
    }

    public function account() {
        return view('account');
    }

    public function staff() {
        return view('staff');
    }

    public function itineraries() {
        return view('itineraries');
    }

    public function bookings() {
        return view('bookings');
    }

    public function vehicles() {
        return view('vehicles');
    }

    public function reviews() {
        return view('reviews');
    }

    public function login() {
        return view('login');
    }
}