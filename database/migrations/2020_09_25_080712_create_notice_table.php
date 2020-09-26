<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notice', function(Blueprint $table)
		{
			$table->integer('notice_id');
			$table->dateTime('noticedate');
			$table->integer('class_id');
			$table->integer('subject_id');
			$table->integer('section_id');
			$table->string('description', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notice');
	}

}
