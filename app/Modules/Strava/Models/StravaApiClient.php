<?php

namespace App\Modules\Strava\Models;

use App\Core\Facades\StravaApi;

class StravaApiClient
{
    public static function getOAthUrl($redirect)
    {
        return StravaApi::authenticationUrl($redirect, $approvalPrompt = 'auto', $scope = null, $state = null);
    }

    /*
     * Добавляем токен, чтобы можно было начать выполнять запросы
     */
    public static function setToken($token)
    {
        return StravaApi::setAccessToken($token);
    }

    /*
     * Получение общих данных любого атлета по id
     */

    public static function getAthlete($id = null)
    {
        if (is_null($id)) {
            return StravaApi::get('/athlete');
        } else {
            return StravaApi::get('/athletes/' . $id);
        }
    }

    /*
     * auth token only
     */
    public static function getAthleteStats($id)
    {
        return StravaApi::get('/athletes/' . $id . '/stats');
    }

    /*
     * any athlets
     */
    public static function getAthleteKoms($id)
    {
        return StravaApi::get('/athletes/' . $id . '/koms');
    }

    public static function getAthleteFriends($id = null, $status = 1)
    {
        switch ($status) {
            case 1:
                $type = 'friends';
                break;
            case 2:
                $type = 'followers';
                break;
            case 3:
                $type = 'both-following';
                break;
            default:
                $type = 'friends';
        }

        if (is_null($id)) {
            return StravaApi::get('/athlete/' . $type);
        } else {
            return StravaApi::get('/athletes/' . $id . '/' . $type);
        }
    }

    /*
     * Получение данных о зонах (сердце, энергия), только для текущего пользователя (по токену)
     */
    public static function getZones()
    {
        return StravaApi::get('athlete/zones');
    }

    /*
     * Активность
     */
    public static function getAthleteActivities()
    {
        return StravaApi::get('athlete/activities', ['include_all_efforts' => true]);
    }

    public static function getFriendsActivities()
    {
        return StravaApi::get('activities/following');
    }

    public static function getActivity($id)
    {
        return StravaApi::get('activities/' . $id);
    }

    public static function getRelatedActivities($id)
    {
        return StravaApi::get('activities/' . $id . '/related');
    }
    /*
     * payment requred
     */
    public static function getActivityZones($id)
    {
        return StravaApi::get('activities/' . $id . '/zones');
    }

    public static function getActivityLaps($id)
    {
        return StravaApi::get('activities/' . $id . '/laps');
    }

    /*
     * Routes
     */
    public static function getAthleteRoutes($id)
    {
        return StravaApi::get('athletes/' . $id . '/routes');
    }

    public static function getRoute($id)
    {
        return StravaApi::get('routes/' . $id);
    }
    /*
     * Segments
     *
     * Получить участок по его id
     */
    public static function getSegment($id)
    {
        return StravaApi::get('segments/' . $id);
    }

    public static function getStarredSegment($user_id)
    {
        return StravaApi::get('athletes/' . $user_id . '/segments/starred');
    }

    public static function getSegmentEfforts($segment_id, $param = [])
    {
        return StravaApi::get('segments/' . $segment_id . '/segment_efforts', $param);
    }

    public static function getAllEfforts($segment_id, $param = [])
    {
        return StravaApi::get('segments/' . $segment_id . '/all_efforts', $param);
    }


    public static function getLeaderboard($segment_id, $param = [])
    {
        return StravaApi::get('segments/' . $segment_id . '/leaderboard', $param);
    }

}
