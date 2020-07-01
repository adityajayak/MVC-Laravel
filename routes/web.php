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
    return view('Home');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/wolcomea', function () {
    return view('welcomea');
});

Route::get('/Register', 'HomeController@Register' );
Route::get('/welcomea', 'AuthController@welcomea');
Route::post('/welcomea', 'AuthController@welcomea_post');

