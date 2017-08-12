<?php

namespace App\Modules\Users\Models;

use App\Modules\Main\Models\Result;
use App\Modules\Strava\Models\Strava;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'page_default',
    ];


    public function admin()
    {
        return $this->hasMany(Admin::class, 'role_id');
    }
}
