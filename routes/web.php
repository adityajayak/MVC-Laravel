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
Route::get('/welcomku', function () {
    return view('welcomku');
});
Route::get('/Register', 'HomeController@Register' );
Route::get('/welcome', 'AuthController@welcome');
Route::post('/welcome', 'AuthContoller@welcome_post');

