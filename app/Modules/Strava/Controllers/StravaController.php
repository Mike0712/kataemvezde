<?php

namespace App\Modules\Strava\Controllers;

use App\Core\Facades\StravaApi;
use App\Http\Controllers\Controller;
use App\Modules\Strava\Models\StravaApiClient;
use App\Modules\Strava\Services\StravaManager;
use ErrorException;
use Request;
use Session;
use App\Modules\Strava\Models\Strava;
use Auth;

class StravaController extends Controller
{
    /*
     * Метод для обработки редиректа от Strava Oauth, меняем временный ключ на постоянный и кладём в сессию
     */

    public function oAuth()
    {
        $code = request()->only('code')['code'];

        try{
            $getToken = StravaApi::tokenExchange($code);
            Session::put('strava.access_token', $getToken->access_token);
            Session::put('strava.athlete.id', $getToken->athlete->id);
        }catch (ErrorException $e){
            return $e;
        }

        return redirect(route('strava.user_fix'));
    }
    /*
     * Привязка аккаунта на Strava к учетной записи зарегистрированного пользователя
     */

    public function add()
    {
        if(!Auth::check()){
            return redirect('/login/form');
        }
        if(Auth::user()->strava){
            return 'Аккаунт Strava уже привязан к учетной записи данного пользователя';
        }
        return redirect(url(StravaApiClient::getOAthUrl(route('strava.oauth'))));
    }

    /*
     * Фиксация пользователя Strava в БД, но пока без регистрации в системе
     * @var $sm StravaManager
     */
    public function stravaUserFix(StravaManager $sm)
    {
        $data = $sm->addStravaAuthData();

        return view('strava::agreement', $data);
    }

}
