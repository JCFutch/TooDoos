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
			<table>
				<thead>
					<th>Task Name</th>
					<th>Category</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th>Completed?</th>
					<th>Comments</th>
				</thead>
		@foreach($tasks as $task)
				<tbody>
					<td>{{ $task->taskname }}</td>
					<td>{{ $task->category }}</td>
					<td>{{ $task->created_at }}</td>
					<td>{{ $task->updated_at }}</td>
					<td>{{ $task->complete }}</td>
					<td>{{ $task->comments }}</td>
		@endforeach
			</table>
		
	@endif
	
	<h6 style="text-align: center;"><a href="{{ URL::to('/') }}">&lsaquo;&lsaquo;&lsaquo; Back</a></h6>
	
	</div>
</div>















@include('_layouts.footer')