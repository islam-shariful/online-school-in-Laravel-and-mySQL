<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenttTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentt', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('sName', 50);
			$table->string('sid', 20);
			$table->string('fName', 50);
			$table->string('mName', 50);
			$table->string('gender', 20);
			$table->string('dob', 50);
			$table->string('admissionDate', 50);
			$table->string('bGroup', 20);
			$table->string('religion', 50);
			$table->string('eMail', 50);
			$table->string('admissionClass', 50);
			$table->string('section', 50);
			$table->string('gPN', 50);
			$table->string('address', 50);
			$table->text('myImage');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentt');
	}

}
