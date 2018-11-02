<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Tour;
use App\Trip;
use App\Vehicle;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    // view all trips
    public function all() {
        $trips = Trip::orderBy('Trip_Id', 'asc')->get();

        return view('trips')->with('trips', $trips)->with('error', 0);
    }

    //view one trip with details
    public function view($id) {
        $t = Trip::find($id);
        $tourno = $t->Tour_No;
        $tour = Tour::find($tourno);
        $customers = Customer::join('trip_booking', 'customer.Customer_id', '=', 'trip_booking.Primary_Customer')
            ->where('trip_booking.Trip_Id', '=', $t->Trip_Id)->get();
        return view('trips.view')->with('t', $t)->with('tour', $tour)->with('customers', $customers);
    }

    //add new trip
    public function add(Request $request) {
        $tours = Tour::orderBy('Tour_No', 'asc')->get();
        $vehicles = Vehicle::orderBy('Rego_No', 'asc')->get();
        return view('trips.add')->with('tours', $tours)->with('vehicles', $vehicles);
    }

    //save new trip
    public function commit(Request $request){
        $request->validate([

        ]);

        //dd($request);
        $t = new Trip;
        $t->Tour_No = $request->selTour;
        $t->Rego_No = $request->selVehicle;
        $t->Departure_Date = $request->Departure_Date;
        $t->Max_Passengers = $request->Max_Passengers;
        $t->Standard_Amount = $request->Standard_Amount;
        $t->save();

        $trips = Trip::orderBy('Trip_Id', 'asc')->get();

        return view('trips')->with('trips', $trips)->with('error', 0);
    }

    //update a trip
    public function displayEditForm($id) {
        $trip = Trip::find($id);
        $tours = Tour::orderBy('Tour_No', 'asc')->get();
        $vehicles = Vehicle::orderBy('Rego_No', 'asc')->get();
        return view('trips.edit')->with('trip', $trip)->with('tours', $tours)->with('vehicles', $vehicles);
    }

    //save edited trip
    public function updateTrip(Request $request) {

        $request->validate([

        ]);
        $t = Trip::find($request->Trip_Id);
        $t->Tour_No = $request->selTour;
        $t->Rego_No = $request->selVehicle;
        $t->Departure_Date = $request->Departure_Date;
        $t->Max_Passengers = $request->Max_Passengers;
        $t->Standard_Amount = $request->Standard_Amount;
        $t->save();

        $trips = Trip::orderBy('Trip_Id', 'asc')->get();

        return view('trips')->with('trips', $trips)->with('error', 0);
    }

    //delete a trip
    public function delete($id) {
        try {
            Trip::findOrFail($id)->delete();
        }
        catch(QueryException $qe) {
            $trips = Trip::orderBy('Trip_Id', 'asc')->get();

            return view('trips')->with('trips', $trips)->with('error', 1);
        }

        $trips = Trip::orderBy('Trip_Id', 'asc')->get();

        return view('trips')->with('trips', $trips)->with('error', 0);
    }
}
