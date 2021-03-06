<?php

namespace App\Modules\Main\Models;

use App\Models\AppModel as Model;
use Eloquent\Dialect\Json;

class Club extends Model
{
    /**
     * Namespace: \Eloquent\Dialect
     * Trait: \Eloquent\Dialect\Json
     */
    use Json;

    protected $jsonColumns = ['json_data'];

    protected $table = 'clubs';

    public function Person()
    {
        return $this->belongsToMany('App\Models\Person','person_club', 'club_id', 'person_id');
    }

    public function competition()
    {
        return $this->hasMany('App\Models\Track', 'club_id');
    }
}
