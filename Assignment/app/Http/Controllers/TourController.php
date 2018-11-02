<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use App\Tour;

class TourController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    // view all tours
    public function all() {
        $tour = Tour::orderBy('Tour_No', 'asc')->get();

        return view('tours')->with('tour', $tour)->with('error', 0);
    }

    //add new tour
    public function add(Request $request) {
        return view('tours.add');
    }

    //save new tour
    public function commit(Request $request){
        $request->validate([
            'Tour_Name' => 'required|max:70',
            'Description' => 'required'
        ]);

        $t = new Tour;
        $t->Tour_Name = $request->Tour_Name;
        $t->Description = $request->Description;
        $t->Duration = $request->Duration;
        $t->Route_Map = $request->Route_Map;
        $t->save();

        $tour = Tour::orderBy('Tour_No', 'asc')->get();

        return view('tours')->with('tour', $tour)->with('error', 0);
    }

    //update a tour
    public function displayEditForm($id) {
        $tour = Tour::find($id);
        return view('tours.edit')->with('tour', $tour);
    }

    //save edited tour
    public function updateTour(Request $request) {

        $request->validate([
            'Tour_Name' => 'required|max:70',
            'Description' => 'required'
        ]);
        $t = Tour::find($request->Tour_No);
        $t->Tour_Name = $request->Tour_Name;
        $t->Description = $request->Description;
        $t->Duration = $request->Duration;
        $t->Route_Map = $request->Route_Map;
        $t->save();

        $tour = Tour::orderBy('Tour_No', 'asc')->get();

        return view('tours')->with('tour', $tour)->with('error', 0);
    }

    //delete a tour
    public function delete($id) {
        try {
            Tour::findOrFail($id)->delete();
        }
        catch(QueryException $qe) {
            $tour = Tour::orderBy('Tour_No', 'asc')->get();

            return view('tours')->with('tour', $tour)->with('error', 1);
        }
        $tour = Tour::orderBy('Tour_No', 'asc')->get();

        return view('tours')->with('tour', $tour)->with('error', 0);
    }

    //get departure dates
    public function departures() {
        $stats = DB::select('SELECT trip.Tour_No, tour.Tour_Name, trip.Trip_Id, trip.Departure_Date 
                              FROM tour, trip WHERE trip.Tour_No = tour.Tour_No;');
        return view('tours.departure')->with('stats', $stats);
    }
}
