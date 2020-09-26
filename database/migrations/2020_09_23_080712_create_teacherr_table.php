<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherrTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teacherr', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tid', 50);
			$table->string('tName', 50);
			$table->string('gender', 50);
			$table->string('dob', 50);
			$table->string('department', 50);
			$table->string('email', 50);
			$table->string('phone', 50);
			$table->string('address', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teacherr');
	}

}
