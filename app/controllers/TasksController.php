<?php

class TasksController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
       //Get all tasks in the database and show them. This will show both completed and uncompleted tasks.
		
		$tasksIncomplete = Task::where('complete', '=', 'Not Complete.')->orderBy('created_at', 'desc')->get();
		$tasksComplete = Task::where('complete', '=', 'Complete!')->orderBy('created_at', 'desc')->get();
		
		
        return View::make('tasks.index')
			->with('tasksIncomplete', $tasksIncomplete)
			->with('tasksComplete', $tasksComplete);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
	  //As more categories are added by the user, they will show up in the drop down list
	  $categories = Task::lists('category', 'category');	
	
	  return View::make('tasks.create')
		->with('categories', $categories);
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
		if (Input::get('categoryList'))
		{
			$tasks->category = Input::get('categoryList');
		}
		else
		{
		$tasks->category = Input::get('category');
		}
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
		//Retrieve tasks from database by id
		
		//$tasks = Task::find($id);
		
		
		//return View::make('tasks.show')
			//->with('tasks', $tasks);
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
		$tasks->save();
		
		//redirect to page
		Return Redirect::to('/');
	}
	
	/**
	 * Complete the task
	 *
	 * @param int $id
	 * @return Response
	 */
	 public function complete($id)
	 {
	 
		//Find the task by id and allow to complete
		return View::make('tasks.complete')->with('task', Task::find($id));
	 }
	
	/**
	 * Update the completion
	 *
	 * @param int $id
	 * @return Response
	 */
	public function completed($id)
	{
		
		$tasks = Task::find($id);
		$tasks->complete = 'Complete!';
		$tasks->save();
		
		//Redirect to main tasks list
		return Redirect::to('/');
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
		
		Return Redirect::to('tasks');
	}
	
	public function openTasks()
	{
		//Show tasks that are open in the database
		$tasks = DB::table('tasks')->where('complete', '=', "Not Complete.")->orderBy('created_at', 'asc')->get();
		
		$completions = Task::completed()->get();
		$completion = $completions->count();
		//return $completion;
		
		return View::make('home')
			->with('tasks', $tasks)
			->with('completions', $completions);
	}
	
	
}
