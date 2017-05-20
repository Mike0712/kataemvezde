<?php

namespace App\Modules\Main\Models;

use App\Models\AppModel as Model;

class Track extends Model
{
    public function club()
    {
        return $this->belongsTo('App\Models\Club', 'club_id');
    }

    public function distance()
    {
        return $this->belongsToMany('App\Models\Distance', 'track_distance_link', 'track_id', 'distance_id');
    }

    public function link()
    {
        return $this->belongsToMany('App\Models\Link', 'track_distance_link', 'track_id', 'link_id');
    }

    public function competition()
    {
        return $this->hasMany('App\Models\Competition', 'track_id');
    }
}
