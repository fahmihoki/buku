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

Route::resource('/buku', 'BukuController');
Route::resource('/pasok', 'PasokController');
Route::resource('/jualan', 'JualanController');
Route::resource('/distri', 'DistriController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('bukuquery', 'BukuController@search');

Route::get('pasokquery', 'PasokController@search');

Route::get('jualanquery', 'JualanController@search');

Route::get('distriquery', 'DistriController@search');
