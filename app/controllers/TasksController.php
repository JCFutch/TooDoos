<?php

class TasksController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('tasks.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('tasks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Puts new tasks in to the database
		$tasks = new Task;
		
		$tasks->taskname = Input::get('taskname');
		$tasks->category = Input::get('category');
		$tasks->comments = Input::get('comments');
		if (Input::get('complete') === 'yes')
		{
			$tasks->complete = "Complete!";
		}
		else
		{
			$tasks->complete = "Not Complete.";
		}
		$tasks->save();
		
		
		Return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Get all tasks in the database and show them. This will show both completed and uncompleted tasks.
		
		$tasks = DB::table('tasks')->orderBy('created_at', 'desc')->get();
		
		
        return View::make('tasks.show')
			->with('tasks', $tasks);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('tasks.edit')->with('task', Task::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//Find the task, and update it in the database
		
		$tasks = Task::find($id);
		$tasks->taskname = Input::get('taskname');
		$tasks->category = Input::get('category');
		$tasks->comments = Input::get('comments');
		if (Input::get('complete') === 'yes')
		{
			$tasks->complete = "Complete!";
		}
		else
		{
			$tasks->complete = "Not Complete.";
		}
		$tasks->save();
		
		//redirect to page
		Return Redirect::to('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Find the task, and delete it from the database
		$tasks = Task::find($id);
		$tasks->delete();
		
		Return Redirect::to('/');
	}
	
	public function openTasks()
	{
		//Show tasks that are open in the database
		$tasks = DB::table('tasks')->orderBy('created_at', 'asc')->get();
		
		return View::make('home')
			->with('tasks', $tasks);
	}

}
