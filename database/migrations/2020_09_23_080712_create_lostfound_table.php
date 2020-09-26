<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostfoundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lostfound', function(Blueprint $table)
		{
			$table->integer('lostfound_id');
			$table->string('lostname', 50);
			$table->string('lostdescription', 50);
			$table->date('lostday');
			$table->string('found', 50);
			$table->string('received', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lostfound');
	}

}
