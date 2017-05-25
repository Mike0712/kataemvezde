<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/strava_oauth',['as' => 'strava.oauth', 'uses' => 'StravaServiceController@oAuth']);
    Route::get('/user_fix',['as' => 'strava.user_fix', 'uses' => 'StravaServiceController@stravaUserFix']);
    Route::get('/tracks', ['as' => 'tracks', 'uses' => 'TrackingController@tracks']);
    Route::get('/track/{id}', ['as' => 'track', 'uses' => 'TrackingController@track']);
    Route::get('/tracks/add', ['as' => 'track.add', 'uses' => 'TrackingController@trackAdd']);
    Route::get('/strava/add', ['as' => 'strava.add', 'uses' => 'StravaServiceController@add']);
});
