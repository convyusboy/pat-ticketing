<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lecturers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unique()->unsigned();
			$table->string('profession', 100)->nullable();
			$table->string('institution', 100)->nullable();
			$table->timestamps();
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
		Schema::drop('lecturers');
	}

}
