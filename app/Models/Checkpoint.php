<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
