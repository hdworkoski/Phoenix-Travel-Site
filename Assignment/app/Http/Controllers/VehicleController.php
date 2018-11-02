<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    //view all vehicles
    public function all() {
        $vehicles = Vehicle::orderBy('Rego_No', 'asc')->get();

        return view('vehicles')->with('vehicles', $vehicles);
    }
}
