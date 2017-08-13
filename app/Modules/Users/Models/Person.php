<?php

namespace App\Modules\Users\Models;

use App\Models\AppModel as Model;
use App\Modules\Main\Models\Club;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $table = 'persons';

    protected $fillable = ['first_name', 'last_name', 'sex', 'birthday'];

    public function club()
    {
        return $this->belongsToMany(Club::class,'person_club', 'person_id', 'club_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}
