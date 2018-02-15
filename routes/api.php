<?php

Route::group(['middleware' => 'auth:api'], function () {

    // User
    Route::post('/auth', 'ApisController@getAuth');
});
