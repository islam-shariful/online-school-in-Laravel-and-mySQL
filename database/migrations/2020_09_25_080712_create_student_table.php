<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('student_id', 50);
			$table->integer('class_id');
			$table->integer('section_id');
			$table->string('studentname', 50);
			$table->string('studentemail', 50);
			$table->string('studentaddress', 250);
			$table->string('studentimage', 50);
			$table->string('studentbloodgroup', 50);
			$table->string('studentfathername', 50);
			$table->string('studentmothername', 50);
			$table->bigInteger('guardiannumber');
			$table->string('admissionclass', 50);
			$table->string('studentdob', 50);
			$table->string('studentgender', 10);
			$table->string('studentreligion', 50);
			$table->date('admissiondate');
			$table->string('disorder', 50);
			$table->string('allergic', 50);
			$table->string('heartproblem', 50);
			$table->string('otherdisease', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student');
	}

}
