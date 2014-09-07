@extends('layouts.default')

@section('content')

	<h1>all tasks</h1>
	
	<ul class="list-group">
		@foreach($tasks as $task)
			<li class="list-group-item"> {{ link_to("tasks/$task->id", $task->title) }} </li>
		@endforeach
	</ul>
@stop