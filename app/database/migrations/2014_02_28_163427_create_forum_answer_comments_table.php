<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumAnswerCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_answer_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('forum_answer_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('comment');
			$table->timestamps();
			$table->foreign('forum_answer_id')
			->references('id')->on('forum_answers')
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
		Schema::drop('forum_answer_comments');
	}

}
