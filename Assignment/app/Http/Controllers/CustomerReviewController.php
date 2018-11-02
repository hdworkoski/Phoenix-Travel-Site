<?php

namespace App\Http\Controllers;

use App\Customer_Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerReviewController
 * @package App\Http\Controllers
 */
class CustomerReviewController extends Controller
{
    /**
     * CustomerReviewController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all() {
        $reviews = Customer_Review::orderBy('Review_id', 'asc')->get();

        return view('reviews')->with('reviews', $reviews);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tripStats() {
        $stats = DB::select('SELECT trip_booking.Trip_Id, tour.Tour_Name, trip.Departure_Date, 
                              AVG(customer_review.Rating) AS Average 
                              FROM customer_review, trip_booking, trip, tour 
                              WHERE customer_review.Trip_Booking_No = trip_booking.Trip_Booking_No 
                              AND trip_booking.Trip_Id = trip.Trip_Id AND trip.Tour_No = tour.Tour_No 
                              GROUP BY trip_booking.Trip_Id, trip.Departure_Date, tour.Tour_Name;');
        return view('reviews.trips')->with('stats', $stats);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tourStats() {
        $stats = DB::select('SELECT trip.Tour_No, tour.Tour_Name, AVG(customer_review.Rating) AS Average 
                            FROM customer_review, trip_booking, trip, tour 
                            WHERE customer_review.Trip_Booking_No = trip_booking.Trip_Booking_No 
                            AND trip_booking.Trip_Id = trip.Trip_Id 
                            AND trip.Tour_No = tour.Tour_No 
                            GROUP BY trip.Tour_No, tour.Tour_Name;');
        return view('reviews.tours')->with('stats', $stats);
    }
}
