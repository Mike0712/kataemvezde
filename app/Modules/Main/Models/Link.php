<?php

namespace App\Modules\Main\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function track()
    {
        return $this->belongsToMany('App\Models\Track', 'track_distance_link', 'link_id', 'track_id');
    }
}
