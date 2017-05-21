<?php

namespace App\Modules\Strava\Models;

use App\Core\Facades\StravaApi;
use Illuminate\Database\Eloquent\Model;

class StravaApiClient
{
    public static function getOAthUrl($redirect)
    {
        return StravaApi::authenticationUrl($redirect, $approvalPrompt = 'auto', $scope = null, $state = null);
    }

    public static function getAthletes($token, $id)
    {
        StravaApi::setAccessToken($token);
        return StravaApi::get('/athletes/' . $id);
    }
}
