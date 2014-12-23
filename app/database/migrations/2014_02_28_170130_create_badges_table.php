<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('badges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->text('description');
			$table->string('image_name');
			$table->string('image_path');
			$table->integer('badge_type_id')->unsigned()->default(1);
			$table->timestamps();
			$table->foreign('badge_type_id')
			->references('id')->on('badge_types')
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
		Schema::drop('badges');
	}

}
