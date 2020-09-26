<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teacher', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('teacher_id', 50);
			$table->string('teachername', 50);
			$table->string('teacheremail', 50);
			$table->string('teacherdesignation', 50);
			$table->string('teacherdepartment', 50);
			$table->string('teacheraddress', 50);
			$table->string('teacherdob', 50);
			$table->string('teachergender', 10);
			$table->string('teacherreligion', 50);
			$table->date('teacherjoiningdate');
			$table->string('teacherfathername', 50);
			$table->string('teachermothername', 50);
			$table->integer('subject_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teacher');
	}

}
