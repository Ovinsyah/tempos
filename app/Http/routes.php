<?php

Route::get('/', 'HomeController@bukahome');
Route::get('page/sd', 'SdController@index');


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
Route::get('page/dashboard', 'DashboardController@index');
Route::get('page/addevent', 'AddeventController@index');
Route::get('page/addnews', 'AddnewsController@index');
Route::get('page/addfasilitas', 'AddfasilitasController@index');
Route::get('page/addprestasi', 'AddprestasiController@index');
Route::get('page/editbiaya', 'EditbiayaController@index');
Route::get('page/editevent', 'EditeventController@index');
Route::get('page/editfasilitas', 'EditfasilitasController@index');
Route::get('page/editkegiatan', 'EditkegiatanController@index');
Route::get('page/editnews', 'EditnewsController@index');
Route::get('page/editprestasi', 'EditprestasiController@index');
Route::get('page/editprofile', 'EditprofileController@index');
Route::get('page/admin', 'AdminController@index');

/* Route ::post cuma bisa diakses pake form yang ada method post
 * Jadi kalau ada yang mau akses https://localhost/contoh-post
 * secara langsung melalui url, ga bisa
*/
Route::post('contoh-post', 'ContohController@posting');

/* Coba tes apa beda antara
 * Route::post('contoh-post', 'ContohController@posting');
 * dengan
 * Route::get('contoh-post', 'ContohController@posting');
*/

Route::get('contoh-form', 'ContohController@form');
