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

Route::get('/dashboard', 'PagesController@index');

Route::get('/customers', 'PagesController@customers');

Route::get('/tours', 'PagesController@tours');

Route::get('/trips', 'PagesController@trips');

Route::get('/account', 'PagesController@account');

Route::get('/staff', 'PagesController@staff');

Route::get('/itineraries', 'PagesController@itineraries');

Route::get('/bookings', 'PagesController@bookings');

Route::get('/reviews', 'PagesController@reviews');

Route::get('/vehicles', 'PagesController@vehicles');

Route::get('/', 'PagesController@login');