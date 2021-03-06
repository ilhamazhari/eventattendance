<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/event', 'API\EventController', ['except' => ['edit', 'show', 'create']]);
Route::resource('/attendee', 'API\AttendeeController', ['except' => ['edit', 'show', 'create']]);
Route::post('/attendee/import', 'API\AttendeeController@import');
Route::get('/attendee/attendance/{id_attendee}', 'API\AttendeeController@attendance');