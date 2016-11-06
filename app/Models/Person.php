<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    //

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
