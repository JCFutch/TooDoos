@section('content')

<h3 style="text-align: center;">Edit Task</h3><hr>

{{ Form::model($task, array('method' => 'put', 'route' => array('tasks.update', $task->id))) }}

	{{ Form::label('taskname', 'Edit Task Name') }}
	{{ Form::text('taskname') }}
	
	{{ Form::label('category', 'Category') }}
	{{ Form::text('category') }}
	
	{{ Form::label('comments', 'Comments') }}
	{{ Form::textarea('comments') }}
<<<<<<< HEAD
<div id="dateContainer">
  <div id="datelabels">	
	{{ Form::label('created_at', 'Date Created:') }}{{ Form::label('updated_at', 'Date Updated:') }}&nbsp;&nbsp;&nbsp;&nbsp;{{ Form::label('goalcomplete', 'Due Date:') }}
  </div>
  <div id="dates">
	<p>{{ $task->created_at->format('F d, Y') }}</p><p>{{ $task->updated_at->format('F d, Y') }}</p><p>{{ $task->goalcomplete }}</p>
  </div>	
</div> 
=======
	
	<!--{{ Form::label('complete', 'Task Completed?') }}
	<input type="checkbox" name="complete" value="yes" />-->
	
	{{ Form::label('created_at', 'Date Created:') }}
	<p style="font-size: 13px;">{{ $task->created_at->format('F d, Y') }}</p>
	
	{{ Form::label('updated_at', 'Date Updated:') }}
	<p style="font-size: 13px;">{{ $task->updated_at->format('F d, Y') }}</p>
	
	{{ Form::label('goalcomplete', 'Due Date:') }}
	<p style="font-size: 13px;">{{ $task->goalcomplete }}</p>
>>>>>>> 2d98ccbafbecb74af653ccb045855dcefe736ead
	{{ Form::label('changedue', 'Change Due Date:') }}
	{{ Form::text('changedue', null,  array('class' => 'datepicker')) }}
	<script>
			$('.datepicker').pickadate({
				format: 'mmmm d, yyyy'
				});
	</script>
<<<<<<< HEAD
  
=======
	
>>>>>>> 2d98ccbafbecb74af653ccb045855dcefe736ead
	<br />
	
	{{ Form::submit('Save', array('class' => 'button tiny radius success')) }}
	<a class="close-reveal-modal">&#215;</a>
	

{{ Form::close() }}
