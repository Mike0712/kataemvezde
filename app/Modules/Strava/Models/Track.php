<?php

namespace App\Modules\Strava\Models;

use App\Models\AppModel as Model;

class Track extends Model
{
    protected $fillable = ['title', 'distance', 'polyline', 'user_id'];

    public function checkpoint()
    {
        return $this->hasMany('App\Modules\Strava\Models\Checkpoint', 'track_id');
    }

    public function validate($data)
    {
        $restriction = [
            'title' => 'required|min:2',
            'distance' => 'integer',
            'polyline' => 'required',
            'user_id' => 'integer',
        ];

        return validator($data, $restriction);
    }
}
