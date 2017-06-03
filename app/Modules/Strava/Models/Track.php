<?php

namespace App\Modules\Strava\Models;

use App\Models\AppModel as Model;

class Track extends Model
{
    public function checkpoint()
    {
        return $this->hasMany('App\Modules\Strava\Models\Checkpoint', 'track_id');
    }
}
