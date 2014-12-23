<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_week_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('question');
			$table->boolean('solved')->default(false);
			$table->integer('vote')->default(0);
			$table->integer('forum_flag_type_id')->unsigned()->default(1);
			$table->timestamps();
			$table->foreign('course_week_id')
			->references('id')->on('course_weeks')
			->onDelete('cascade');
			$table->foreign('user_id')
			->references('id')->on('users')
			->onDelete('cascade');
			$table->foreign('forum_flag_type_id')
			->references('id')->on('forum_flag_types')
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
		Schema::drop('forums');
	}

}
