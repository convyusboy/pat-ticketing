<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quiz_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('quiz_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('answer');
			$table->integer('score');
			$table->timestamps();
			$table->foreign('quiz_id')
			->references('id')->on('quizes')
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
		Schema::drop('quiz_answers');
	}

}
