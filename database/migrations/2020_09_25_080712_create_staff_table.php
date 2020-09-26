<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('staff_id', 50);
			$table->string('staffname', 50);
			$table->integer('staffphone');
			$table->string('stafffathername', 50);
			$table->string('staffmothername', 50);
			$table->string('staffaddress', 250);
			$table->string('staffdob', 50);
			$table->string('staffphoto', 50);
			$table->string('staffgender', 50);
			$table->string('staffreligion', 50);
			$table->date('staffjoiningdate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staff');
	}

}
