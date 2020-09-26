<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parent', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('parent_id', 50);
			$table->string('student_id', 50);
			$table->string('parentname', 50);
			$table->string('parentemail', 50);
			$table->bigInteger('parentphone');
			$table->string('parentrelation', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parent');
	}

}
