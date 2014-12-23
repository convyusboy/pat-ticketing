<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseWeeksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_weeks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned();
			$table->string('name', 100);
			$table->text('description');
			$table->smallInteger('order')->default(1);
			$table->timestamps();
			$table->foreign('course_id')
			->references('id')->on('courses')
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
		Schema::drop('course_weeks');
	}

}
