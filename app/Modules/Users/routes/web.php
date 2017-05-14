<?php

Route::group(['namespace' => 'Auth', 'middleware' => 'web',], function (){
    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
    Route::post('/login', ['uses' => 'AuthController@authenticate']);
    Route::post('/logout', ['as' => 'logout','uses' => 'AuthController@logout']);
    Route::get('/register', ['as' => 'register', 'uses' => 'AuthController@logout']);
});

Route::group(['namespace' => 'Admin', 'middleware' => ['web']], function (){
    Route::any('/profile', ['as' => 'profile', 'uses' => 'ProfileController@members']);
});




//Auth::routes();