<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    //override default table name
    protected $table = 'Itinerary';

    //relationship with tours
    public function tours() {
        return $this->belongsTo('App\Tour');
    }
}
