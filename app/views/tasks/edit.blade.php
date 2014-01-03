@section('content')

<h3 style="text-align: center;">Edit Task</h3><hr>

{{ Form::model($task, array('method' => 'put', 'route' => array('tasks.update', $task->id))) }}

	{{ Form::label('taskname', 'Edit Task Name') }}
	{{ Form::text('taskname') }}
	
	{{ Form::label('category', 'Category') }}
	{{ Form::text('category') }}
	
	{{ Form::label('comments', 'Comments') }}
	{{ Form::textarea('comments') }}
	
	{{ Form::label('complete', 'Task Completed?') }}
	{{ Form::checkbox('complete', 'yes', false) }}
	
	<br />
	
	{{ Form::submit('Save', array('class' => 'button tiny radius success')) }}
	<a class="close-reveal-modal">&#215;</a>
	

{{ Form::close() }}
