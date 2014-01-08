@section('title')
TooDoos | All Tasks
@stop

@include('_layouts.header')




@section('content')
<div class="row">
	<div class="large-12 columns" style="margin-top: 50px;">
	
	@if( ! $tasks )
	
		<h5>There are no tasks found!</h5>
		
	@else
			<center><table>
				<thead>
					<th>Task Name</th>
					<th>Category</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th>Completed?</th>
					<th>Comments</th>
					<th>Delete Task</th>
				</thead>
		@foreach($tasks as $task)
				<tbody>
					<td><a href="#">{{ $task->taskname }}</a></td>
					<td>{{ $task->category }}</td>
					<td>{{ $task->created_at }}</td>
					<td>{{ $task->updated_at }}</td>
					<td>{{ $task->complete }}</td>
					<td>{{ $task->comments }}</td>
					{{ Form::open(array('route' => array('tasks.destroy', $task->id), 'method' => 'delete')) }}
					<td><a href="{{ URL::route('tasks.destroy', $task->id) }}"><button type="submit" class="button tiny radius alert">Delete</button></a></td>
					{{ Form::close() }}
		@endforeach
			</table></center>
		
	@endif
	
	<h6 style="text-align: center;"><a href="{{ URL::to('/') }}">&lsaquo;&lsaquo;&lsaquo; Back</a></h6>
	
	</div>
</div>















@include('_layouts.footer')