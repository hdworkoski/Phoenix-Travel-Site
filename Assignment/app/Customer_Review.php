<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Review extends Model
{
    //override default table name
    protected $table = 'Customer_Review';

    //override default primary key
    protected $primaryKey = 'Review_id';

    //relationship with trip bookings
    public function trip_bookings() {
        return $this->hasOne('App\Trip_Booking');
    }
}
