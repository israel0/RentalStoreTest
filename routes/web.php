<?php

use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;


Route::get('/', function () {
    return view('/welcome');  
});

Route::get('/log', function () {
    return Activity::all();      
});

Route::get('/status' , function (){

    // LOG RENTED AND RETURNED ACTIVITIES
     return $activity  =  Activity::where('description' , 'updated')->get();
    
 });


 Auth::routes();

 Route::get('/users' , 'UserController@index')->name('users.index');
 Route::get('/renthistory/{user_id}' , 'UserController@renthistory')->name('renthistory');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@reports')->name('reports');
Route::get('/items' ,'ItemController@index')->name('item.index');
Route::resource('/items', 'ItemController');
 
 
 