<?php

namespace App\Modules\Main\Models;

use App\Models\AppModel as Model;

class Competition extends Model
{
    public function checkpoint()
    {
        return $this->hasMany('App\Models\Checkpoint', 'competition_id');
    }

    public function track()
    {
        return $this->belongsTo('App\Models\Track', 'track_id');
    }
}
