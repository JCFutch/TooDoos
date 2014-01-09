@section('title')
TooDoos | All Tasks
@stop

@include('_layouts.header')




@section('content')
<div class="row">
	<div class="large-12 columns" style="margin-top: 50px;">
	<h2 style="text-align: center;">Incomplete Tasks</h2>
	
	@if( $tasksIncomplete->isEmpty() )
	
		<h5 style="text-align: center;">There are no incomplete tasks.</h5>
		
	@else
	
		<br />
			<center><table>
				<thead>
					<th>Task Name</th>
					<th>Category</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th>Comments</th>
					<th>Delete Task</th>
				</thead>
		@foreach($tasksIncomplete as $task)
			
				<tbody>
					<td><a href="{{ URL::route('task', $task->taskname) }}">{{ $task->taskname }}</a></td>
					<td>{{ $task->category }}</td>
					<td>{{ $task->created_at }}</td>
					<td>{{ $task->updated_at }}</td>
					<td>{{ $task->comments }}</td>
					{{ Form::open(array('route' => array('tasks.destroy', $task->id), 'method' => 'delete')) }}
					<td><a href="{{ URL::route('tasks.destroy', $task->id) }}"><button type="submit" class="button tiny radius alert">Delete</button></a></td>
					{{ Form::close() }}
			
		@endforeach
			</table></center>
	
	@endif
	
	
	
	
	<center><hr style="width: 50%;"></center>
	
	<h2 style="text-align: center;">Completed Tasks</h2>
	
	@if( $tasksComplete->isEmpty() )
	
		<h5 style="text-align: center;">There are no completed tasks.</h5>
		
	@else
	
		<br />
		<br />
			<center><table>
				<thead>
					<th>Task Name</th>
					<th>Category</th>
					<th>Created At</th>
					<th>Completed At</th>
					<th>Comments</th>
					<th>Delete Task</th>
				</thead>
		@foreach($tasksComplete as $task)
			
				<tbody>
					<td><a href="{{ URL::route('task', $task->taskname) }}">{{ $task->taskname }}</a></td>
					<td>{{ $task->category }}</td>
					<td>{{ $task->created_at }}</td>
					<td>{{ $task->updated_at }}</td>
					<td>{{ $task->comments }}</td>
					{{ Form::open(array('route' => array('tasks.destroy', $task->id), 'method' => 'delete')) }}
					<td><a href="{{ URL::route('tasks.destroy', $task->id) }}"><button type="submit" class="button tiny radius alert">Delete</button></a></td>
					{{ Form::close() }}
			
		@endforeach
			</table></center>
			
	@endif
			
	<br />
	<h6 style="text-align: center;"><a href="{{ URL::to('/') }}">&lsaquo;&lsaquo;&lsaquo; Back</a></h6>
	
	</div>
</div>















@include('_layouts.footer')