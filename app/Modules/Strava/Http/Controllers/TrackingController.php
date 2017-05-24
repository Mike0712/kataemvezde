<?php

namespace App\Modules\Strava\Http\Controllers;

use App\Core\Facades\StravaApi;
use Polyline;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Strava\Models\StravaApiClient;
use Cornford\Googlmapper\Facades\MapperFacade;
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
     */
    public function __construct(StravaRepository $repo, StravaService $service)
    {
        $this->repo = $repo;
        $this->service = $service;
    }

    public function tracks()
    {
        echo 123;die;
    }

    public function track($id)
    {
        echo $id;die;
    }

    public function trackAdd(Request $request)
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

        return view('strava::trackadd', ['obj' => $obj]);
    }
}
