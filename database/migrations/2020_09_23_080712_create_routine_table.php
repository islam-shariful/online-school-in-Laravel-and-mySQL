<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('routine', function(Blueprint $table)
		{
			$table->integer('routine_id');
			$table->integer('class_id');
			$table->integer('section_id');
			$table->string('teacher_id', 20);
			$table->time('startingtime');
			$table->time('endingtime');
			$table->string('day', 50);
			$table->integer('subject_id');
			$table->string('teachername', 50);
			$table->string('sectionname', 50);
			$table->string('subjectname', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('routine');
	}

}
