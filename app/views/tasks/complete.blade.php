@section('content')


<h5 style="text-align: center;">Confirm Completion of:</h5><hr>


{{ Form::open(array('route' => array('tasks.completed', $task->id))) }}

<h6 style="text-align: center;">{{ $task->taskname }}</h6><br />

<center>{{ Form::submit('Yes', ['class' => 'button tiny radius success']) }}</center>
<a class="close-reveal-modal">&#215;</a>

{{ Form::close() }}




