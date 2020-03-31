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
    return redirect()->route('projects.create');
});

Route::post('/constants/ajaxUpdate', 'ConstantController@ajaxUpdate')->name('constants.ajaxUpdate');
Route::resource('projects', 'ProjectController')->except('show');
Route::post('/projects/ajax', 'ProjectController@ajax')->name('projects.ajax');
Route::resource('clients', 'ClientController')->except('show');
Route::get('/clients/ajax', 'ClientController@ajax')->name('clients.ajax');
Route::post('/clients/fast-store', 'ClientController@fastStore')->name('clients.fastStore');
Route::resource('assessors', 'AssessorController')->except('show');
Route::get('/assessors/ajax', 'AssessorController@ajax')->name('assessors.ajax');
Route::resource('inverters', 'InverterController')->except('show');
Route::get('/inverters/ajax', 'InverterController@ajax')->name('inverters.ajax');
Route::resource('zones', 'ZoneController')->except('show');
Route::get('/zones/ajax', 'ZoneController@ajax')->name('zones.ajax');
Route::get('/zones/ajax-get-radiations', 'ZoneController@ajaxGetRadiations')->name('zones.ajaxGetRadiations');

Route::name('reports.')->group(function () {
    Route::get('projects/report/{project}', 'ProjectController@report')->name('project');
});
