<?php

class Task extends Eloquent {
	protected $guarded = array();
	
	protected $fillable = array('complete');

	public static $rules = array();
	
	protected $table = 'tasks';
	
	public function scopeCompleted($query)
	{
		 $query->where('complete', '=', 'Complete!');
	}
	
	
}
