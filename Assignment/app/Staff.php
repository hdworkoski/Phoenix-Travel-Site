<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //override default table name
    protected $table = 'Staff';

    //override default primary key
    protected $primaryKey = 'Staff_id';

    //relationship with users
    public function users() {
        return $this->belongsTo('App\User');
    }
}
