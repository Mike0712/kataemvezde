<?php

namespace App\Modules\Main\Models;

use App\Models\AppModel as Model;

class Checkpoint extends Model
{
    public function competition()
    {
        return $this->belongsTo('App\Models\Competition', 'competition_id');
    }

    public function result()
    {
        return $this->hasMany('App\Models\Result', 'checkpoint_id');
    }
}
