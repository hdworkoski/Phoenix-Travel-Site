<?php

namespace App\Http\Controllers;

use App\Itinerary;
use App\Tour;
use Illuminate\Http\Request;

class ItineraryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    //view all itineraries for a specified tour
    public function all($id) {
        $itineraries = Itinerary::where('Tour_No', $id)
            ->orderBy('Day_No', 'asc')
            ->get();

        $t = Tour::where('Tour_No', $id)->get();
//dd($t);
        return view('itineraries', [
            'itineraries' => $itineraries,
            'tour' => $id,
            't' => $t,
            'add' => 0
        ]);
    }

    //add an itinerary for a tour
    public function add($id) {
        $itineraries = Itinerary::where('Tour_No', $id)
            ->orderBy('Day_No', 'asc')
            ->get();

        //$tour = Tour::where('Tour_No', $id)->get();

        return view('itineraries', [
            'itineraries' => $itineraries,
            'tour' => $id,
            'add' => 1
        ]);
    }

    //save a new itinerary
    public function commit(Request $request) {

        $i = new Itinerary();
        $i->Tour_No = $request->Tour_No;
        $i->Day_No = $request->Day_No;
        $i->Hotel_Booking_No = $request->Hotel_Booking_No;
        $i->Activities = $request->Activities;
        $i->Meals = $request->Meals;
        $i->save();

        $id= $request->Tour_No;

        $itineraries = Itinerary::where('Tour_No', $id)
            ->orderBy('Day_No', 'asc')
            ->get();

        return view('itineraries', [
            'itineraries' => $itineraries,
            'tour' => $id,
            'add' => 0
        ]);
    }

    //display edit page
    public function displayEditForm($id) {
        $i = Itinerary::find($id);
        return view('itineraries.edit')->with('i', $i);
    }

    //save edited itinerary
    public function updateItinerary(Request $request) {
        $i = Itinerary::find($request->id);
        $i->Day_No = $request->Day_No;
        $i->Hotel_Booking_No = $request->Hotel_Booking_No;
        $i->Activities = $request->Activities;
        $i->Meals = $request->Meals;
        $i->save();

        $id= $request->Tour_No;

        $itineraries = Itinerary::where('Tour_No', $id)
            ->orderBy('Day_No', 'asc')
            ->get();

        return view('itineraries', [
            'itineraries' => $itineraries,
            'tour' => $id,
            'add' => 0
        ]);
    }

    //delete an itinerary
    public function delete($id) {
        $i = Itinerary::find($id);
        $tour = $i->Tour_No;

        Itinerary::findOrFail($id)->delete();

        $itineraries = Itinerary::where('Tour_No', $tour)
            ->orderBy('Day_No', 'asc')
            ->get();

        return view('itineraries', [
            'itineraries' => $itineraries,
            'tour' => $tour,
            'add' => 0
        ]);
    }
}
