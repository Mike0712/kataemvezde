<?php

//Фронтконтроллер

Route::group(['middleware' => ['web']], function(){
    Route::any('/', ['as' => 'main', 'uses' => 'IndexController@index']);
    Route::any('/about', ['as' => 'main', 'uses' => 'IndexController@about']);
    Route::any('/calendar', ['as' => 'main', 'uses' => 'IndexController@calendar']);


});
