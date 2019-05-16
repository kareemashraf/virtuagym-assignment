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

Route::get('docs', function(){
    return View::make('docs.api.doc.index');
});

Route::get('users', 'UserController@index');    	//get all users
Route::get('users/{id}', 'UserController@show');   //get user by id
Route::post('users', 'UserController@store'); 	  //insert user
Route::put('users', 'UserController@update'); 	 //update user
Route::delete('users/{id}', 'UserController@delete'); //delete user

Route::get('plans', 'PlanController@index');  	//get all plans
Route::post('plans', 'PlanController@store');  //insert new plan
Route::delete('plans/{id}', 'PlanController@delete'); //delete user

Route::delete('days/{id}', 'DayController@delete'); //delete Day
Route::put('days', 'DayController@update'); 	//update Day
Route::post('days', 'DayController@store');  //insert new day

Route::put('exercises', 'ExerciseController@update'); 	//update Exercises
Route::post('exercises', 'ExerciseController@store');  //insert new plan