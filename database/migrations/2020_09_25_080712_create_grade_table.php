<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grade', function(Blueprint $table)
		{
			$table->integer('grade_id');
			$table->string('student_id', 20);
			$table->integer('subject_id');
			$table->integer('class_id');
			$table->string('finalgrade', 50);
			$table->integer('section_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grade');
	}

}
