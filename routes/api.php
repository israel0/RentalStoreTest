<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {  return $request->user();});
Route::get('/', function () { return view('/welcome'); });
Auth::routes();
Route::get('/log', function () { return Activity::all();   });
Route::get('/status' , function (){ return $activity  =  Activity::where('description' , 'updated')->get();});
Route::get('/users' , 'UserController@index')->name('users.index');
Route::get('/renthistory/{user_id}' , 'UserController@renthistory')->name('renthistory');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@reports')->name('reports');
Route::get('/items' ,'ItemController@index')->name('item.index');
Route::resource('/items', 'ItemController');
