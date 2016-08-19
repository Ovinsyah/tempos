<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@bukahome');//

Route::get('page/sd', 'SdController@index');
Route::get('page/smp', 'SmpController@index');
Route::get('page/sma', 'SmaController@index');
Route::get('page/bandingkan', 'BandingkanController@index');
Route::get('page/sma', 'SmaController@index');
Route::get('page/bandingkan2', 'Bandingkan2Controller@index');
Route::get('page/rekomendasi', 'RekomendasiController@index');
Route::get('page/berita1', 'Berita1Controller@index');
Route::get('page/event1', 'Event1Controller@index');
Route::get('page/pencarian', 'PencarianController@index');
Route::get('page/signup', 'SignupController@index');
