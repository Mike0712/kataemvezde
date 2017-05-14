<?php


/*
 * Auth::routes();
 */

Route::group(['namespace' => 'Auth', 'middleware' => 'web',], function (){
    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
    Route::post('/login', ['uses' => 'AuthController@authenticate']);
    Route::post('/logout', ['as' => 'logout','uses' => 'AuthController@logout']);
    Route::get('/register', ['as' => 'register', 'uses' => 'AuthController@register']);
    Route::post('/register', ['as' => 'register_post', 'uses' => 'RegisterController@register']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset', ['as' => 'password.request', 'uses' => 'AuthController@showLinkRequestForm']);
    Route::post('password/reset', ['uses' => 'ResetPasswordController@reset']);
    Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'AuthController@showResetForm']);
});

Route::group(['namespace' => 'Admin', 'middleware' => ['web']], function (){
    Route::any('/profile', ['as' => 'profile', 'uses' => 'ProfileController@members']);
});




//Auth::routes();