<?php

Route::get('test', function () {
    echo 'test';
});

Route::get('/', 'HomeController@home')->middleware('authentication');

Route::get('home', 'HomeController@home')->middleware('authentication');

Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');

Route::get('logout','UserController@logout');
