<?php

use Illuminate\Http\Request;

Route::get('/getdata','APIController@getBeranda');
Route::get('/getlist/{id}','APIController@getListSejarah');
Route::get('/getdetail/{id}','APIController@getDetailSejarah');

