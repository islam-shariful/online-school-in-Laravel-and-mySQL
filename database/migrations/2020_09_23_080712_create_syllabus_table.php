<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyllabusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('syllabus', function(Blueprint $table)
		{
			$table->integer('syllabus_id');
			$table->string('title', 50);
			$table->string('directory', 100);
			$table->integer('subject_id');
			$table->integer('section_id');
			$table->integer('class_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('syllabus');
	}

}
