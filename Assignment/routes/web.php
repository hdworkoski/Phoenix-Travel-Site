<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * show dashboard page
 */
Route::get('/', 'RolesController@index');

/**
 * show dashboard
 */
Route::get('/dashboard', 'RolesController@index');

/**
 * show customers page
 */
Route::get('/customers', 'CustomerController@all');

/**
 * approve a customer
 */
Route::post('/customer/approve/{Customer_id}', 'CustomerController@approve');

/**
 * display view to add a new customer
 */
Route::get('/customer', 'RolesController@add');

/**
 * save a new customer
 */
Route::post('/customer', 'RolesController@commit');

/**
 * update a customer
 */
Route::get('/customer/{Customer_id}', 'RolesController@displayEditForm');

/**
 * save edited customer
 */
Route::post('/customer/update', 'RolesController@updateCustomer');

/**
 * delete a customer
 */
Route::delete('/customer/{Customer_id}', 'CustomerController@delete');

/**
 * show tours page
 */
Route::get('/tours', 'TourController@all');

/**
 * display view to add a new Tour
 */
Route::get('/tour', 'TourController@add');

/**
 * save a new tour
 */
Route::post('/tour', 'TourController@commit');

/**
 * update a tour
 */
Route::get('/tour/{Tour_No}', 'TourController@displayEditForm');

/**
 * save edited tour
 */
Route::post('/tour/update', 'TourController@updateTour');

/**
 * delete a tour
 */
Route::delete('/tour/{Tour_No}', 'TourController@delete');

/**
 * show tour departures
 */
Route::get('/tours/departures', 'TourController@departures');

/**
 * show trips page
 */
Route::get('/trips', 'TripController@all');

/**
 * view details of a specific trip
 */
Route::get('trip/view/{Trip_Id}', 'TripController@view');

/**
 * display view to add a new trip
 */
Route::get('/trip', 'TripController@add');

/**
 * save a new trip
 */
Route::post('/trip', 'TripController@commit');

/**
 * update a trip
 */
Route::get('/trip/{Trip_Id}', 'TripController@displayEditForm');

/**
 * save edited trip
 */
Route::post('/trip/update', 'TripController@updateTrip');

/**
 * delete a trip
 */
Route::delete('/trip/{Trip_Id}', 'TripController@delete');

/**
 * show account page
 */
Route::get('/account', 'RolesController@account');

/**
 * save edited account
 */
Route::post('/account/update', 'RolesController@updateAccount');

/**
 * show staff page
 */
Route::get('/staff', 'StaffController@staff');

/**
 * show page to add new staff
 */
Route::get('/staff/add/new', 'StaffController@add');

/**
 * save new staff member
 */
Route::post('/staff/save/new', 'StaffController@save');

/**
 * show page to edit staff
 */
Route::get('/staff/{Staff_id}/{Email}', 'StaffController@displayEditForm');

/**
 * save edited staff member
 */
Route::post('staff/update', 'StaffController@update');

/**
 * delete staff member
 */
Route::delete('staff/{Staff_id}/{Email}', 'StaffController@delete');

/**
 * show itineraries page
 */
Route::get('/itineraries/{Tour_No}', 'ItineraryController@all');

/**
 * Display fields to add an itinerary
 */
Route::get('/itineraries/{Tour_No}/add', 'ItineraryController@add');

/**
 * save a new itinerary
 */
Route::post('/itineraries)', 'ItineraryController@commit');

/**
 * edit an itinerary
 */
Route::get('/itinerary/edit/{id}', 'ItineraryController@displayEditForm');

/**
 * save updated itinerary
 */
Route::post('/itineraries/update', 'ItineraryController@updateItinerary');

/**
 * delete an itinerary
 */
Route::delete('/itineraries/{id}', 'ItineraryController@delete');

/**
 * show bookings page
 */
Route::get('/bookings', 'RolesController@bookings');

/**
 * show reviews page
 */
Route::get('/reviews', 'CustomerReviewController@all');

/**
 * show trip review stats page
 */
Route::get('/reviews/trips', 'CustomerReviewController@tripStats');

/**
 * show tour review stats page
 */
Route::get('/reviews/tours', 'CustomerReviewController@tourStats');

/**
 * show vehicles page
 */
Route::get('/vehicles', 'VehicleController@all');

/**
 * auth routes
 */
Auth::routes();
