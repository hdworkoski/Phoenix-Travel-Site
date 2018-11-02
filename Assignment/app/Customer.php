<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //override default table name
    protected $table = 'Customer';

    //override default primary key
    protected $primaryKey = 'Customer_id';

    //relationship with trip bookings
    public function trip_bookings() {
        return $this->hasMany('App\Trip_Booking');
    }
}
