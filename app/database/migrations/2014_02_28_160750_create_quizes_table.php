<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quizes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_week_id')->unsigned();
			$table->timestamps();
			$table->foreign('course_week_id')
			->references('id')->on('course_weeks')
			->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quizes');
	}

}
