<?php

Route::group(['middleware' => ['api', 'auth:api'], 'prefix' => 'api'], function () {
    Route::resource('mains', 'IndexController');
});
