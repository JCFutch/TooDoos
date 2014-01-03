@section('title')
TooDoos | To-Do App
@stop


@include('_layouts.header')



@section('content')

<section class="main-section" style="margin-top: 50px;">
			<div class="row">
				<div class="large-12 columns">
				@if($tasks)
				
					<center><table>
						<thead>
							<th>Task Name</th>
							<th>Category</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Comments</th>
							<th>Edit Task</th>
						</thead>
					
						@foreach($tasks as $task)
							@if($task->complete === "Not Complete.")
						<tbody>
							<td>{{ $task->taskname }}</td>
							<td>{{ $task->category }}</td>
							<td>{{ $task->created_at }}</td>
							<td>{{ $task->updated_at }}</td>
							<td>{{ $task->comments }}</td>
							<td><button data-reveal-id="edit" data-reveal-ajax="{{ URL::to('tasks/edit', $task->id) }}" class="button tiny radius">Edit</button></td>
						</tbody>
							@endif
						@endforeach
					</table></center>
					
				@else
				
					<h5>There are no tasks to be completed.</h5>
					
				@endif
			    </div>
			</div>
			</section>







@include('_layouts.footer')