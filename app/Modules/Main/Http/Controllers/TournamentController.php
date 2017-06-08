<?php

namespace App\Modules\Main\Http\Controllers;

use App\Core\Facades\StravaApi;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Strava\Models\StravaApiClient;
use Illuminate\Http\Response;
use App\Modules\Main\Http\Requests\MainRequest;
use App\Modules\Main\Repositories\MainRepository;
use App\Modules\Main\Services\MainService;
use ErrorException;
use League\Flysystem\Exception;
use Request;
use Session;
use Auth;

class TournamentController extends Controller
{
    /**
     * @var MainRepository
     */
    protected $repo;

    /**
     * @var MainService
     */
    protected $service;

    /**
     * TournamentController constructor.
     *
     * @param MainRepository $repo
     * @param MainService $service
     */
    public function __construct(MainRepository $repo, MainService $service)
    {
        $this->repo = $repo;
        $this->service = $service;
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
     * @param MainRequest $request
     *
     * @return Response
     */
    public function store(MainRequest $request)
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
     * @param MainRequest $request
     * @param int $id
     *
     * @return Response
     */
    public function update(MainRequest $request, $id)
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
