<?php

namespace App\Modules\Main\Models;

use App\Models\AppModel as Model;

class Result extends Model
{
    public function checkpoint()
    {
        return $this->belongsTo('App\Models\Checkpoint', 'checkpoint_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
