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

Route::post('/tasks', 'TasksController@store');
Route::post('/login', [ 'as' => 'login', 'uses' => 'LoginController@store']);
Route::post('/register', 'RegistrationController@store');

Route::get('/', 'TasksController@index')->name('home');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/tasks/{task}/edit', 'TasksController@edit');
Route::get('/login', [ 'as' => 'login', 'uses' => 'LoginController@create']);
Route::get('/logout', 'LoginController@destroy');
Route::get('/register', 'RegistrationController@create');

Route::patch('/tasks/{task}', 'TasksController@update');
Route::patch('/tasks/{task}/complete', 'StatusController@update');
Route::patch('/tasks/{task}/setactive', 'StatusController@update');

Route::delete('/tasks/{task}', 'TasksController@delete');
