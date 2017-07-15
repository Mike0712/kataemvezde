<?php

namespace App\Modules\Strava\Controllers;

use App\Core\Facades\StravaApi;
use App\Http\Controllers\Controller;
use App\Modules\Strava\Models\StravaApiClient;
use App\Modules\Strava\Repositories\StravaRepository;
use App\Modules\Strava\Services\StravaService;
use ErrorException;
use Request;
use Session;
use App\Modules\Strava\Models\Strava;
use Auth;

class StravaServiceController extends Controller
{
    /*
     * Метод для обработки редиректа от Strava Oauth, меняем временный ключ на постоянный и кладём в сессию
     */

    public function oAuth(Request $request)
    {
        $code = $request::only('code')['code'];

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
     * Фиксация пользователя Strava в БД, но пока без регистрации в системе
     */
    public function stravaUserFix()
    {
        if(Session::has('strava.access_token')){
            $token = Session::get('strava.access_token');
            $id = Session::get('strava.athlete.id');
            StravaApiClient::setToken($token);
            $api = StravaApiClient::getAthlete($id);

            $item = Strava::where('strava_id', '=', $id)->first();
            if(!$item)
            {
                $item = new Strava();
                $item->access_token = $token;
                $item->strava_id = $id;
                if(Auth::check()){
                    $item->register = true;
                    $item->user_id = Auth::user()->id;
                    $item->save();
                    return redirect(route('profile'));
                }
                $item->save();

                return view('strava::agreement', ['name' => $api->firstname . ' ' . $api->lastname, 'email' => 'strava' . $api->id]);
            }else{
                return 'Данный аккаунт Strava уже используется другим пользователем';
            }
            if(!$item->register)
            {
                return view('strava::agreement', ['name' => $api->firstname . ' ' . $api->lastname, 'email' => 'strava' . $api->id]);
            }
            $email = $item->user->email;
            if(Auth::attempt(['email'    => $email,
                              'password' => env('STRAVA_REG_PASSWORD')
            ], true)){
                return redirect(route('profile'));
            }
        }
    }

    public function add(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login/form');
        }
        if(Auth::user()->strava){
            return 'Аккаунт Strava уже привязан к учетной записи данного пользователя';
        }
        return redirect(url(StravaApiClient::getOAthUrl(route('strava.oauth'))));
    }
}
