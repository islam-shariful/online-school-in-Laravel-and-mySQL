<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjecttTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjectt', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('sName', 50);
			$table->string('sCode', 50);
			$table->string('sType', 50);
			$table->string('sClass', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subjectt');
	}

}
