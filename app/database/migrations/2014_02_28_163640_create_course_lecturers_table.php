<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseLecturersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_lecturers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->foreign('course_id')
			->references('id')->on('courses')
			->onDelete('cascade');
			$table->foreign('user_id')
			->references('id')->on('users')
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
		Schema::drop('course_lecturers');
	}

}
