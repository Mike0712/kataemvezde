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
use League\Flysystem\Exception;
use Request;
use Session;

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

    public function oAuth(Request $request)
    {
        $code = $request::only('code')['code'];

        try{
            $getToken = StravaApi::tokenExchange($code);
            $token = $getToken->access_token;
        }catch (Exception $e){
            echo $e;
        }
        Session::put('strava.access_token', $token);
        Session::put('strava.token_type', $getToken->token_type);
        Session::put('strava.athlete.id', $getToken->athlete->id);

        return redirect(route('strava.reg'));
    }

    public function register()
    {
        if(Session::has('strava.access_token')){
            $token = Session::get('strava.access_token');
            $id = Session::get('strava.athlete.id');
            dump(StravaApiClient::getAthletes($token, $id)); die;
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
