<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //override default table name
    protected $table = 'Tour';

    //override default primary key
    protected $primaryKey = 'Tour_No';

    //relationship with trips
    public function trips() {
        return $this->hasMany('App\Trip');
    }

    //relationship with itineraries
    public function itineraries() {
        return $this->hasMany('App\Itinerary');
    }
}
