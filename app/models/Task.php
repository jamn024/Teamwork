<?php

class Task extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	'title' => 'required',
	'description' => 'required',
	'responsible' => 'required|numeric',
	'duration' => 'required|numeric',
	'start' => 'required|date',
	'end' => 'required|date',


	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'description', 'responsible', 'duration', 'start', 'end', 'completed'];
	public function member()
	{
		return $this->belongsTo('Member','responsible');
	}

}