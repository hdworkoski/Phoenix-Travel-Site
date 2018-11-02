<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //override default table name
    protected $table = 'Vehicle';

    //override default primary key
    protected $primaryKey = 'Rego_No';

    //remove default increments
    public $incrementing = false;

    //relationship with trips
    public function trips() {
        return $this->hasMany('App\Trip');
    }
}
