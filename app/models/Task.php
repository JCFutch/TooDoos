<?php

class Task extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	protected $table = 'tasks';
}
