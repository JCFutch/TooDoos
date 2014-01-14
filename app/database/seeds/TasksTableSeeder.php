<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tasks')->truncate();

		$tasks = array(
		
			'taskname' => 'Test Task',
			'category' => 'Personal',
			'complete' => 'Not Complete.',
			'comments' => 'This is just a test comment',
			'goalcomplete' => ''

		);

		// Uncomment the below to run the seeder
		 //DB::table('tasks')->insert($tasks);
	}

}
