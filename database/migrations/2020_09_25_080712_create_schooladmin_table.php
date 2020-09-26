<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchooladminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schooladmin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('schooladmin_id', 50);
			$table->string('schooladminname', 50);
			$table->string('schooladminemail', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schooladmin');
	}

}
