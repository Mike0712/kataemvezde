<?php

namespace App\Modules\Users\Models;

use App\Models\AppModel as Model;
use App\Modules\Main\Models\Club;
use Eloquent\Dialect\Json;

class Person extends Model
{

    protected $table = 'persons';


    public function club()
    {
        return $this->belongsToMany(Club::class,'person_club', 'person_id', 'club_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}
