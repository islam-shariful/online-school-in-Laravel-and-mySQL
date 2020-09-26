<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeboardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticeboard', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nTitle', 50);
			$table->string('nDetails', 10000);
			$table->string('pBy', 50);
			$table->string('Date', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('noticeboard');
	}

}
