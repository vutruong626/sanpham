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
/*
|--------------------------------------------------------------------------
| Web admin
|--------------------------------------------------------------------------
|
|
*/
Route::prefix('login')->group(function () {
	Route::get('/','Auth\\LoginController@getLogin')->name('login');
	Route::post('/','Auth\\LoginController@postLogin');
	Route::get('/logout','Auth\\LoginController@getLogout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Web admin
|--------------------------------------------------------------------------
|
|
*/
Route::group(['prefix'=>'admin','middleware'=>'guest'],function(){
	include('admin.php');
});
/*
|--------------------------------------------------------------------------
| Web admin
|--------------------------------------------------------------------------
|
|
*/


