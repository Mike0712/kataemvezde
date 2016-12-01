<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent\Dialect\Json;

class Person extends Model
{

    protected $table = 'persons';


    public function club()
    {
        return $this->belongsToMany('App\Models\Club','person_club', 'person_id', 'club_id');
    }

    public function user()
    {
        return $this->belongsToMany('App\Models\User', 'user_id');
    }
}
