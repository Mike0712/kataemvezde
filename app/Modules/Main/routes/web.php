<?php

//Фронтконтроллер

Route::group(['middleware' => ['web']], function(){
    Route::any('/', 'IndexController@index')->name('main');
    Route::any('/about', 'IndexController@about')->name('about');
    Route::any('/calendar', 'IndexController@calendar')->name('calendar');
});
