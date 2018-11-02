<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoenixTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * create customer table
         */
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('Customer_id');
            $table->string('First_Name');
            $table->char('Middle_Initial')->nullable();
            $table->string('Last_Name');
            $table->smallInteger('Street_No');
            $table->string('Street_Name');
            $table->string('Suburb');
            $table->integer('Postcode');
            $table->string('Email');
            $table->string('oAuth');
            $table->string('Phone')->nullable();
            $table->tinyInteger('AuthCustomer')->nullable();
            $table->timestamps();
        });

        /**
         * create staff table
         */
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('Staff_id');
            $table->string('Position');
            $table->string('First_Name');
            $table->char('Middle_Initial')->nullable();
            $table->string('Last_Name');
            $table->smallInteger('Street_No');
            $table->string('Street_Name');
            $table->string('Suburb');
            $table->integer('Postcode');
            $table->string('Email');
            $table->string('Phone')->nullable();
            $table->timestamps();
        });

        /**
         * create tour table
         */
        Schema::create('tour', function (Blueprint $table) {
            $table->increments('Tour_No');
            $table->string('Tour_Name');
            $table->string('Description');
            $table->float('Duration');
            $table->string('Route_Map')->nullable();
            $table->timestamps();
        });

        /**
         * create user table
         */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });

        /**
         * create itinerary table
         */
        Schema::create('itinerary', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Tour_No');
            $table->tinyInteger('Day_No');
            $table->string('Hotel_Booking_No');
            $table->string('Activities')->nullable();
            $table->string('Meals')->nullable();
            $table->timestamps();

            $table->foreign('Tour_No')->references('Tour_No')->on('tour');
            $table->unique(['Tour_No', 'Day_No']);
        });

        /**
         * create vehicles table
         */
        Schema::create('vehicle', function(Blueprint $table) {
            $table->string('Rego_No')->primary();
            $table->string('VIN');
            $table->string('Make');
            $table->string('Model');
            $table->integer('Year');
            $table->smallInteger('Capacity');
            $table->string('Fuel_Type')->nullable();
            $table->string('Equipment')->nullable();
            $table->string('Licence_Required');
            $table->timestamps();
        });

        /**
         * create trip table
         */
        Schema::create('trip', function(Blueprint $table) {
            $table->increments('Trip_Id');
            $table->unsignedInteger('Tour_No');
            $table->string('Rego_No');
            $table->date('Departure_Date')->nullable();
            $table->integer('Max_Passengers');
            $table->decimal('Standard_Amount')->nullable();
            $table->timestamps();

            $table->foreign('Tour_No')->references('Tour_No')->on('tour');
            $table->foreign('Rego_No')->references('Rego_No')->on('vehicle');
        });

        /**
         * create trip booking table
         */
        Schema::create('trip_booking', function(Blueprint $table) {
           $table->increments('Trip_Booking_No');
           $table->unsignedInteger('Trip_Id');
           $table->unsignedInteger('Primary_Customer');
           $table->integer('Number_Of_Bookings');
           $table->date('Booking_Date')->nullable();
           $table->decimal('Deposit_Amount')->nullable();
            $table->timestamps();

           $table->foreign('Trip_Id')->references('Trip_Id')->on('trip');
           $table->foreign('Primary_Customer')->references('Customer_id')->on('customer');
        });

        /**
         * create customer review table
         */
        Schema::create('customer_review', function(Blueprint $table) {
           $table->increments('Review_id');
           $table->unsignedInteger('Trip_Booking_No')->unique();
           $table->tinyInteger('Rating');
           $table->string('General_Feedback')->nullable();
           $table->string('Likes')->nullable();
           $table->string('Dislikes')->nullable();
           $table->timestamps();

           $table->foreign('Trip_Booking_No')->references('Trip_Booking_No')->on('trip_booking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerary');
        Schema::dropIfExists('users');
        Schema::dropIfExists('tour');
        Schema::dropIfExists('staff');
        Schema::dropIfExists('customer');
    }
}
