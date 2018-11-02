<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //override default table name
    protected $table = 'Trip';

    //override default primary key
    protected $primaryKey = 'Trip_Id';

    //relationship with tours
    public function tours() {
        return $this->belongsTo('App\Tour');
    }

    //relationship with vehicles
    public function vehicles() {
        return $this->belongsTo('App\Vehicle');
    }

    //relationship with trip bookings
    public function trip_bookings() {
        return $this->hasMany('App\Trip_Booking');
    }
}
