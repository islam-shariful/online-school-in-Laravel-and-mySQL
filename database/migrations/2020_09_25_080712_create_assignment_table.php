<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignment', function(Blueprint $table)
		{
			$table->integer('assignment_id');
			$table->string('filename', 50);
			$table->string('directory', 50);
			$table->string('date', 50);
			$table->string('duedate', 50);
			$table->integer('class_id');
			$table->integer('section_id');
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
		Schema::drop('assignment');
	}

}
