<?php

class Task extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	protected $table = 'tasks';
	
	public function scopeCompleted($query)
	{
		 $query->where('complete', '=', 'Complete!');
	}
	
}
