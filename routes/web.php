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
    return view('home');
});

Route::post('/constants/ajaxUpdate', 'ConstantController@ajaxUpdate')->name('constants.ajaxUpdate');
Route::resource('projects', 'ProjectController')->except('show');
Route::post('/clients/fast-store', 'ClientController@fastStore')->name('clients.fastStore');
Route::get('/zones/ajax-get-radiations', 'ZoneController@ajaxGetRadiations')->name('zones.ajaxGetRadiations');
