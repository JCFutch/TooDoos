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

Route::get('tasks/complete/{id}', 'TasksController@complete');

Route::post('tasks/complete/{id}', array('as' => 'tasks.completed', 'uses' => 'TasksController@completed'));

Route::get('tasks/show/{taskname}', array('as' => 'task', function($taskname)
{
	return View::make('tasks/show')
		->with('task', Task::where('taskname', $taskname)->first());
	
}));


