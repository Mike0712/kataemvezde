<?php

namespace App\Modules\Strava\Models;

use App\Models\AppModel as Model;

class Checkpoint extends Model
{
    public function competition()
    {
        return $this->belongsTo('App\Modules\Strava\Models\Track', 'track_id');
    }
}
