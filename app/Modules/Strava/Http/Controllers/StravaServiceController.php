<?php

namespace App\Modules\Strava\Http\Controllers;

use App\Core\Facades\StravaApi;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Strava\Models\StravaApiClient;
use Illuminate\Http\Response;
use App\Modules\Strava\Http\Requests\StravaRequest;
use App\Modules\Strava\Repositories\StravaRepository;
use App\Modules\Strava\Services\StravaService;
use ErrorException;
use League\Flysystem\Exception;
use Request;
use Session;
use App\Modules\Strava\Models\Strava;
use Auth;

class StravaServiceController extends Controller
{
    /**
     * @var StravaRepository
     */
    protected $repo;

    /**
     * @var StravaService
     */
    protected $service;

    /**
     * StravaController constructor.
     *
     * @param StravaRepository $repo
     * @param StravaService $service
     */
    public function __construct(StravaRepository $repo, StravaService $service)
    {
        $this->repo = $repo;
        $this->service = $service;
    }

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
            $api = StravaApiClient::getAthletes($token, $id);

            $item = Strava::where('strava_id', '=', $id)->first();
            if(!$item)
            {
                $item = new Strava();
                $item->access_token = $token;
                $item->strava_id = $id;
                $item->save();

                return view('strava::agreement', ['name' => $api->firstname . ' ' . $api->lastname, 'email' => 'strava' . $api->id]);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StravaRequest $request
     *
     * @return Response
     */
    public function store(StravaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StravaRequest $request
     * @param int $id
     *
     * @return Response
     */
    public function update(StravaRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
