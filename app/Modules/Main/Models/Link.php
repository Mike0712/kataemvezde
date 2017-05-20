<?php

namespace App\Modules\Main\Models;

use App\Models\AppModel as Model;

class Link extends Model
{
    public function track()
    {
        return $this->belongsToMany('App\Models\Track', 'track_distance_link', 'link_id', 'track_id');
    }
}
