<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignment_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('assignment_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('answer');
			$table->integer('score');
			$table->timestamps();
			$table->foreign('assignment_id')
			->references('id')->on('assignments')
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
		Schema::drop('assignment_answers');
	}

}
