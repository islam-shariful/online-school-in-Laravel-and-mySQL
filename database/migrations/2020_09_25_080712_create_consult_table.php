<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consult', function(Blueprint $table)
		{
			$table->integer('consult_id');
			$table->integer('teacher_id');
			$table->date('consultday');
			$table->time('consultstarting');
			$table->time('consultending');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consult');
	}

}
