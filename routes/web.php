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
Route::get('/qrscanner', function(){ return view('qrscanner'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/attendee', 'FrontController@attendee')->name('attendee');
Route::get('/manage/attendee', 'FrontController@manageAttendee')->name('manage.attendee');
