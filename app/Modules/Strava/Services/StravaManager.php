<?php

namespace App\Modules\Strava\Services;

use App\Modules\Strava\Models\Strava;
use App\Modules\Strava\Models\StravaApiClient;
use Session;
use Auth;

class StravaManager
{
    protected $token;

    protected $api;

    public function __construct()
    {
        if(Session::has('strava.access_token')){
            $this->token = Session::get('strava.access_token');
            $athlete_id = Session::get('strava.athlete.id');
            StravaApiClient::setToken($this->token);
            $this->api = StravaApiClient::getAthlete($athlete_id);
        }else{
            die('Сессия не найдена');
        }
    }

    public function addStravaAuthData()
    {
        $strava = Strava::firstOrNew(['strava_id' => $this->api->id]);
        $strava->access_token = $this->token;
        if (Auth::check()) {
            $strava->register = true;
            $strava->user_id = Auth::user()->id;
        }
        if($strava->save()){
            $name = $this->api->firstname . ' ' . $this->api->lastname;
            $email = 'strava . $this->api->id';
            return compact('name', 'email');
        }
        return [];
    }

}
