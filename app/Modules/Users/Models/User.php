<?php

namespace App\Modules\Users\Models;

use App\Modules\Main\Models\Result;
use App\Modules\Strava\Models\Strava;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * A user can have one person
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne(Person::class, 'user_id');
    }

    public function result()
    {
        return $this->hasMany(Result::class, 'user_id');
    }

    public function strava()
    {
        return $this->hasOne(Strava::class, 'user_id');
    }
}
