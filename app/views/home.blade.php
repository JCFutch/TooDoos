@section('title')
TooDoos | To-Do App
@stop


@include('_layouts.header')



@section('content')

<section class="main-section" style="margin-top: 50px;">
			<div class="row">
				<div class="large-12 columns">
				@if( ! $tasks )				
				<h5>There are no tasks to complete at this time.</h5>				
				@else				
					<center><table>
						<thead>
							<th>Task Name</th>
							<th>Category</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Comments</th>
							<th>Edit Task</th>
							<th>Delete Task</th>
						</thead>
						@foreach($tasks as $task)
						<tbody>
							<td>{{ $task->taskname }}</td>
							<td>{{ $task->category }}</td>
							<td>{{ $task->created_at }}</td>
							<td>{{ $task->updated_at }}</td>
							<td>{{ $task->comments }}</td>
							<td><button data-reveal-id="edit" data-reveal-ajax="{{ URL::to('tasks/edit', $task->id) }}" class="button tiny radius">Edit</button></td>
							{{ Form::open(array('route' => array('tasks.destroy', $task->id), 'method' => 'delete')) }}
							<td><a href="{{ URL::route('tasks.destroy', $task->id) }}"><button type="submit" class="button tiny radius alert">Delete</button></a></td>
							{{ Form::close() }}
						</tbody>
						@endforeach
					</table></center>
				@endif
				</div>
			</div>
			</section>







@include('_layouts.footer')