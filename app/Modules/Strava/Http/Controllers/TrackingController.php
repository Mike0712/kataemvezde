<?php

namespace App\Modules\Strava\Http\Controllers;

use App\Modules\Strava\Models\Track;
use Polyline;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Strava\Models\StravaApiClient;
use App\Modules\Strava\Repositories\StravaRepository;
use App\Modules\Strava\Services\StravaService;
use Request;
use Auth;
use Mapper;

class TrackingController extends Controller
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
     * @param Track $model
     * Базовая модель, для работы с формами
     */
    public function __construct(StravaRepository $repo, StravaService $service, Track $track)
    {
        $this->repo = $repo;
        $this->service = $service;
        $this->model = $track;
    }

    public function tracks()
    {
        $tracks = Track::all();
        if(!Auth::check()){
            $user_tracks = false;
        }else{
            $user_tracks = Track::where('user_id', '=', Auth::user()->id)->get();
        }

        return view('strava::tracks')->with('tracks', ['all' => $tracks, 'user' =>  $user_tracks]);
    }

    public function track($id, Request $request)
    {
        $track = Track::findOrFail($id);
        if (csrf_token() == $request::only('_token')['_token']){
         /*   $req = $request::only('name', 'polyline', 'distance');

            $track = new Track;
            $track->title = $title;
            $track->polyline = $polyline;
            $track->distance = $distance;
            $track->user_id = $user_id;
            $track->save();*/
        }
        $arr_line = Polyline::decodeValue($track->polyline);
        $obj = Mapper::map($arr_line[0]['latitude'], $arr_line[0]['longitude'], [
            'marker' => false,
            'region' => 'RU',
            'language' => 'ru',
        ])->polyline($arr_line, ['clickable' => true,'strokeColor' => 'red', 'strokeOpacity' => 0.6, 'strokeWeight' => 5, 'addpoint' => false, 'addmark' => true]);

        return view('strava::track', ['obj' => $obj, 'id' => $id]);
    }
    // Strava tracks
    public function trackList()
    {
        if(!Auth::check()){
            return redirect('/login/form');
        }
        if(!$strava = Auth::user()->strava){
            return 'Требуется автоизация в Strava';
        }
        $strava_token = $strava->access_token;
        StravaApiClient::setToken($strava_token);
        $api = StravaApiClient::getAthleteRoutes($strava->strava_id);

        return view('strava::tracklist')->with('api', $api);
    }

    public function trackStrava($id)
    {
        if(!Auth::check()){
            return redirect('/login/form');
        }
        if(!$strava = Auth::user()->strava){
            return 'Требуется автоизация в Strava';
        }
        $strava_token = $strava->access_token;
        StravaApiClient::setToken($strava_token);
        $route = null;
        foreach (StravaApiClient::getAthleteRoutes($strava->strava_id) as $rt)
        {
            if($rt->id == $id)
            {
                $route = $rt;
            }
        }
        if(is_null($route)){
            return 'Маршрут не найден';
        }

        $polyline = $route->map->summary_polyline;
        $arr_line = Polyline::decodeValue($polyline);
        $obj = Mapper::map($arr_line[0]['latitude'], $arr_line[0]['longitude'], [
            'draggable' => true,
            'marker' => false,
            'region' => 'RU',
            'language' => 'ru',
            'center' => true,
            'locate' => false,
        ])->polyline($arr_line, ['editable' => true, 'clickable' => true,'strokeColor' => 'red', 'strokeOpacity' => 0.6, 'strokeWeight' => 5, 'addpoint' => true, 'addmark' => false]);

        return view('strava::trackstrava', ['obj' => $obj]);
    }

    public function trackAdd(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login/form');
        }else{
            $user_id = Auth::user()->id;
        }
        if (csrf_token() == $request::only('_token')['_token']){
            $req = $request::only('title', 'polyline', 'distance');
            $this->validateWith($this->model->validate($req));
            $title = $req['title'];
            $distance = $req['distance'];
            $json_polyline = $req['polyline'];
            $coordinates =  json_decode($json_polyline)->coordinates;
            foreach ($coordinates as $coordinate){
                Polyline::addPoint($coordinate[0], $coordinate[1]);
            }
            $polyline = Polyline::encodedString();

            $track = new Track;
            $track->title = $title;
            $track->polyline = $polyline;
            $track->distance = $distance;
            $track->user_id = $user_id;
            $track->save();
        }
    }

    public function test(Request $request)
    {
        $polyline = Polyline::decodeValue('kfxsI_ndcF{MbP{CtSzF~VvOnNrMla@bF|@uCn`AbYjHbj@ua@nJnTvBbSiItvDqfBheDmDx]`SdgAxBfr@yc@ldBiB`qBuLzpCsc@pqCiuA~kDql@noDg\zx@ka@`mCEzvAyHfs@uBzs@pBdhA}Ph_AmSd]gOjkCkNp|@}D|iBgPzyB_Lr{@yUvt@e`@z_CwE~p@oCfk@rCdv@`Rbz@hBr^iLffAkRn~@qP`g@kPhiAe^sBqE~H_Bbb@xFpl@fXpQvUh~AmJxm@nLx[jZ`W|AlMsk@fvLxFtcBFhiAag@hpG_d@dcBuOhuAyUd_AehA~hDkFxn@uxAlsBuQ~`@_cBrjGuJjhAicBbxG}TplGQzrCqWtaDsPz|@mN`zBtYn|CvAbr@ug@bhYdIf{AjMxcAUx{AlDv~AmPbhB{e@pzCoq@xqCuSp_EaMbqAaPnlClJneAn[pmB_@vt@iKbSrh@|u@xRjPtQj`@pS~Tto@tKrc@gb@rIdEmApp@~]fSpc@~Cb{@aTz_Aph@pvA|JhWdSj_@~Jh}BlWbYkRzdErpBnu@`LhTd[jbAvp@~d@dj@bNufBhSk~@aAct@`Py~@zw@eQrCqFnlAgmJhI}`BbeBo|LzNgg@v}AuoCl`@obAjeA{nAjeAsiD|lAoAlvA`^nhEe{Hc@_Rrj@gI~IxIr[{FrUfLj~CjsCbvCttBrV|^rv@`hBbQphArWl[xH~_@zWjq@nVxNvWTbhBr|@|Nhm@za@v|@n{@t]fWxeB|HtVbaAzqAtH`e@t^`o@zQ|n@b[yK|k@mj@pD{YhRiSrg@lb@dv@yFhj@fO|PmuBo@o`E`NksChKkmAdG{ZrF{CCeTzM}|@sVmjKkQ{kAue@urBoMm`DsFo[{\q`Act@of@qh@eyAecA}yBhAul@lIui@nMwtB}Kwm@hGem@Wie@gP}`BkIomDsNylAaG}xCkDc`@yOws@uIepAok@i}C}Wgy@gGm}@eQanAbg@u}DdHegAa@sd@vGah@yQmqBoMuaCgTgp@c[uj@cGs_@sBak@{f@oDcInZctAlaB_z@_\mPhc@dI|\{_@d\cDkRsMvZeP|NySKwBl|A}In]i{@ba@ePs@a]mSoEyOwCwdAjCsj@sA}c@_b@whD}`@oz@sEoc@}\_E{o@uoAgOuOc\ww@}OwkAs]nAaR}MaOkA_VnJsTgGyPtRgMgByZeVfHwn@ba@CGynFyXuo@wTs{AyJ}OdGy_AzGg_@|DciA~Tei@sHel@vD_u@kW?i_@aOgR}Vu_@yUwt@s{AdByHkIyQwCk^kP__@rEsq@hLsDoJy\{qBesB}`Be}Q~k@xGjUfQlg@}l@nb@c]~De_@oHcx@rWqqAhGc|BiGwAaCmZmKkNmGqWyKmkAmHkRyDsk@hOa|@jCgt@xl@{tAd@{MoJsZso@gc@_Wia@av@uEM}d@uGcX_F_bALct@pf@is@nXpA|N{q@hDmr@qD{rBwa@wpB{H_WwOaRaNorAhDmH_GuTwt@qoAiY}I{R{P{`@gHeMg[oEm\e@{fAibAoo@}a@ooCwFkoAgOwIujAioDiAoUsS{`@');
//        pr(Polyline::decodeValue('qwmpIuracF`Tm|A`Waq@lFbJ~f@lS`H~Ifn@nkBnD|f@bf@ts@fUlsBoxA`fBeQjMcClJ?dp@wZiK_o@bj@}]sFeC}JgG]yQ}f@wXqLgXch@sJmEiMiSyQ_qA{VyYqPsl@p|Bc~@tU}QrTga@vMmp@lGqu@jW}q@rFfJhe@hSnMtRpTlz@vS`g@bD~e@`f@nt@zTrrBukBdwBoAbx@g[oJsg@lg@cKlDaWoGqDiLaGO_Qaf@sY_NuWug@kW}VqTkuAaWoY_Pkl@hxBe}@rSqStY{j@dSk|AhYyr@hG`Jjg@hTvL|QpUb|@`Sze@dDhf@ze@jt@vTvsBkuAxbBiRtLoDjNAvm@g[gJ}e@lf@iLhDuXwGmC}KmG_A{Ogc@aZsN_Xog@oKiFwLeSaR_qAyVwY}Okl@`|Be~@tNcN`\yk@dTa`BhWmt@dFlJhg@pSjJpMfl@bjBhDrd@|Ov[nUhWtTlsBywAjeBsS~OsA`y@kZeKsq@rm@g\cI{BqKqGkAcPcd@qYeNiXug@iJ_EsMsSwQ_rAyV{XuOul@h{Bq~@fSmQ|Wih@zZ}oBfQmd@lF~Jdg@bSpJrNvf@j}Akg@m`BcJuLwg@sSgEaJv@wF'));die;
        $obj = Mapper::map(55.65551, 36.48747,[
            'zoom' => 8,
            'draggable' => true,
            'marker' => false,
            'region' => 'RU',
            'language' => 'ru',
        ])->polyline($polyline, ['editable' => 'true', 'strokeColor' => '#000000', 'strokeOpacity' => 0.6, 'strokeWeight' => 5, 'level' => 3]);

        return view('strava::tracktest', ['obj' => $obj]);
    }
}
