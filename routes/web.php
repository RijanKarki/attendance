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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']],function() {

    Route::get('/attendance','AttendanceController@create')->name('attendance.create');
    Route::post('/attendance','AttendanceController@store')->name('attendance.store');
    Route::get('/attendance/list','AttendanceController@index')->name('attendance.index');


});


