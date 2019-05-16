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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'IndexController@index');

// get a plan by id
Route::get('/plan/{id}', 'IndexController@getPlanbyID');

// get user by id
Route::get('/edit-user/{id}', 'UserController@getUserbyID');

// add a new plan 
Route::get('/add_plan', 'IndexController@NewPlan');

// get users
Route::get('/users', 'UserController@getUsers');


// get day by id
Route::get('/edit-day/{id}', 'DayController@getDaybyID');

