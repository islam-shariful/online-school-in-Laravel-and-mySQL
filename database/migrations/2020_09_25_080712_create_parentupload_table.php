<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentuploadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parentupload', function(Blueprint $table)
		{
			$table->integer('parentupload_id', true);
			$table->string('teacher_id');
			$table->string('uploadfiledirectory', 500);
			$table->string('parentuploaddate', 50);
			$table->string('student_id', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parentupload');
	}

}
