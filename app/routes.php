<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/', 'TasksController@openTasks');

Route::resource('tasks', 'TasksController');

Route::get('tasks/edit/{id}', 'TasksController@edit');

Route::post('tasks/edit', 'TasksController@update');


