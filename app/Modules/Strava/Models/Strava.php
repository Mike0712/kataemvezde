<?php

namespace App\Modules\Strava\Models;

use App\Models\AppModel as Model;
use App\Modules\Users\Models\User;

class Strava extends Model
{
    protected $fillable = ['strava_id', 'access_token', 'token_type'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
