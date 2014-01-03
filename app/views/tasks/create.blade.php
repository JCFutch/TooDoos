@section('content')

<h3 style="text-align: center;">Create New Task</h3><hr>

{{ Form::open(array('action' => 'TasksController@store')) }}

	{{ Form::label('taskname', 'Task Name') }}
	{{ Form::text('taskname') }}
	
	{{ Form::label('category', 'Category') }}
	{{ Form::text('category') }}
	
	{{ Form::label('comments', 'Comments') }}
	{{ Form::textarea('comments') }}
	
	{{ Form::submit('Create', array('class' => 'button tiny radius success')) }}
	<a class="close-reveal-modal">&#215;</a>


{{ Form::close() }}