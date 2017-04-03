<?php

namespace App\Modules\Main\Models;

use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    public function track()
    {
        return $this->belongsToMany('App\Models\Track', 'track_distance_link', 'distance_id', 'track_id');
    }
}
