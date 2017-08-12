<?php

namespace App\Modules\Users\Models;

use App\Modules\Main\Models\Result;
use App\Modules\Strava\Models\Strava;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_id',
    ];


    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_id');
    }
}
