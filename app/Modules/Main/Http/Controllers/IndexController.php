<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Models\Club;
use Torann\GeoIP\Facades\GeoIP;


class IndexController extends Controller
{
    public function index(Club $club)
    {
        $strava_access_token = env('STRAVA_ACCESS_TOKEN', null);
        $url = "https://www.strava.com/api/v3/clubs/250150";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $strava_access_token]);
        $result = curl_exec($ch);
        curl_close($ch);
        pr(json_decode($result));
        die;
        return view('front.page.index');
    }
    
    public function about()
    {
        return view('front.page.about');
    }

    public function calendar()
    {
        return view('front.page.calendar');
    }
}
