<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/info','TestController@userInfo');

Route::get('/test2','TestController@test2');

Route::get('/goods','TestController@goods');

Route::get('/token','TestController@token')->middleware("check");


Route::get('/dec','TestController@dec');

Route::get('/sign1','TestController@sign1');


