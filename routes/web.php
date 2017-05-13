<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index');

// Profile


Route::group(['namespace' => 'Admin', 'middleware' => ['admin']], function (){
    Route::any('/profile', ['as' => 'profile', 'middleware' => 'auth', 'uses' => 'ProfileController@members']);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
