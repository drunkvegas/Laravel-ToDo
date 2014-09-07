<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', function($username)
{
	//Find user by UN from Users table
	$user = User::whereUsername($username)->first();
	//Get all tasks associated with user
	return $user->tasks;
	// return them
});

Route::get('{username}/tasks/{id}', function($username, $id)
{
	//Find Task by ID
	$user = User::whereUsername($username)->first();
	$task = $user->tasks()->findOrFail($id);
	dd($task);
	//Load View
	return View::make('tasks.show', compact('task'));
});