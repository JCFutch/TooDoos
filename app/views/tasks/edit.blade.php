@section('content')

<h3 style="text-align: center;">Edit Task</h3><hr>

{{ Form::model($task, array('method' => 'put', 'route' => array('tasks.update', $task->id))) }}

	{{ Form::label('taskname', 'Edit Task Name') }}
	{{ Form::text('taskname') }}
	
	{{ Form::label('category', 'Category') }}
	{{ Form::text('category') }}
	
	{{ Form::label('comments', 'Comments') }}
	{{ Form::textarea('comments') }}
	
	<!--{{ Form::label('complete', 'Task Completed?') }}
	<input type="checkbox" name="complete" value="yes" />-->
	
	{{ Form::label('created_at', 'Task Created At:') }}
	<p>{{ $task->created_at }}</p>
	
	{{ Form::label('updated_at', 'Task Updated At:') }}
	<p>{{ $task->updated_at }}</p>
	
	<br />
	
	{{ Form::submit('Save', array('class' => 'button tiny radius success')) }}
	<a class="close-reveal-modal">&#215;</a>
	

{{ Form::close() }}
