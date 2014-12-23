<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_week_id')->unsigned();
			$table->string('name', 100);
			$table->string('video_url')->nullable();
			$table->string('file_name')->nullable();
			$table->string('file_path')->nullable();
			$table->integer('content_type_id')->unsigned()->default(1);
			$table->timestamps();
			$table->foreign('course_week_id')
			->references('id')->on('course_weeks')
			->onDelete('cascade');
			$table->foreign('content_type_id')
			->references('id')->on('course_content_types')
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
		Schema::drop('course_contents');
	}

}
