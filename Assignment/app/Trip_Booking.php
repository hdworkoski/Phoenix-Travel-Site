<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip_Booking extends Model
{
    //override default table name
    protected $table = 'Trip_Booking';

    //override default primary key
    protected $primaryKey = 'Trip_Booking_No';

    //relationship with trips
    public function trips() {
        return $this->belongsTo('App\Trip');
    }

    //relationship with customers
    public function customers() {
        return $this->belongsTo('App\Customer');
    }

    //relationship with customer reviews
    public function customer_reviews() {
        return $this->hasOne('App\Customer_Review');
    }
}
