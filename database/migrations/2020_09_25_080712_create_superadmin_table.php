<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperadminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('superadmin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('superadmin_id', 50);
			$table->string('superadminname', 50);
			$table->string('superadminemail', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('superadmin');
	}

}
