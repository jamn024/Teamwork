<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
//return View::make('layouts.default');
	$pending  = Task::where('completed',false)->orderBy('end')->get();
	$finished = Task::where('completed',true)->orderBy('end')->get();
	
	//$tasks = Task::orderBy('created_at','desc')->get();
	return View::make('layouts.index', compact('pending','finished'));

});

Route::resource('members', 'MembersController');
Route::resource('tasks', 'TasksController');
