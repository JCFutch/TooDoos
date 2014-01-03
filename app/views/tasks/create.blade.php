@section('content')

<h3 style="text-align: center;">Create New Task</h3><hr>

{{ Form::open(array('action' => 'TasksController@store')) }}

	{{ Form::label('taskname', 'Task Name') }}
	{{ Form::text('taskname') }}
	@if( ! $categories)
	{{ Form::label('category', 'Category') }}
	{{ Form::text('category') }}
	@else
	{{ Form::label('category', 'Category') }}
	{{ Form::select('category', array('' => ' -- Select --') + $categories, Input::old('category')) }}
	
	{{ Form::label('or', 'Or Add New Category') }}
	{{ Form::text('category') }}	
	@endif
	{{ Form::label('comments', 'Comments') }}
	{{ Form::textarea('comments') }}
	
	{{ Form::submit('Create', array('class' => 'button tiny radius success')) }}
	<a class="close-reveal-modal">&#215;</a>


{{ Form::close() }}