@section('title')
TooDoos | Task
@stop

@include('_layouts.header')




@section('content')
<div class="row">
	<div class="large-12 columns" style="padding-top: 50px;">
	
	
	
		<h1 style="text-decoration: underline;">Task Overview</h1>
		<br />
		<h3>Task Name: {{ $task->taskname }}</h3>
		<h5>Date Created: {{ $task->created_at->format('F d, Y') }}</h5>
		<h5>Due Date: {{ $task->goalcomplete }}</h5>
		<h5>Is this complete?: {{ $task->complete }}</h5>
		<h5>Comments: {{ $task->comments }}</h5>
	
		
	
	
	
	
	<h6 style="text-align: center; padding-top: 50px;"><a href="{{ URL::previous() }}">&lsaquo;&lsaquo;&lsaquo; Back</a></h6>
	
	</div>
</div>







@include('_layouts.footer')