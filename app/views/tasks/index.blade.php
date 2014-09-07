@extends('layouts.default')

@section('content')

	<h1>all tasks</h1>
	
	@foreach($tasks as $task)
		<li> {{ link_to("tasks/$task->id", $task->title) }} </li>
	@endforeach
@stop