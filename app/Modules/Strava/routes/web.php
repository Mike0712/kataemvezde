<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/strava_oauth',['as' => 'strava.oauth', 'uses' => 'StravaServiceController@oAuth']);
    Route::get('/user_fix',['as' => 'strava.user_fix', 'uses' => 'StravaServiceController@stravaUserFix']);
});
