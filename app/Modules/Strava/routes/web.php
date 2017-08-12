<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/strava_oauth', 'StravaController@oAuth')->name('strava.oauth');
    Route::get('/user_fix', 'StravaController@stravaUserFix')->name('strava.user_fix');
    Route::get('/strava/add', 'StravaController@add')->name('strava.add');

    Route::get('/tracks/{id}', 'TracksController@track')->name('track');

    Route::get('/tracks/list', 'TracksController@trackList')->name('tracks.list');
    Route::get('/track/strava/{id}', 'TracksController@trackStrava')->name('track.strava');

    Route::get('/tracks', 'TracksController@tracks')->name('tracks');
    Route::any('/tracks/add', 'TracksController@trackAdd')->name('tracks.add');
    Route::any('/tracks/edit/{id}', 'TracksController@trackAdd')->name('tracks.edit');
    Route::any('/tracks/delete/{id}', 'TracksController@trackAdd')->name('tracks.delete');

    Route::get('/tracks/test', 'TracksController@test')->name('track.test');
});
