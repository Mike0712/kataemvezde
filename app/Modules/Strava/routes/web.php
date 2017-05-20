<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/strava_oauth',['as' => 'strava.oauth', 'uses' => 'StravaServiceController@oAuth']);
    Route::get('/stravareg',['as' => 'strava.reg', 'uses' => 'StravaServiceController@register']);
});
