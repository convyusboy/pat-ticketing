<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 20);
			$table->string('password', 60);
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('address')->nullable();
			$table->string('city', 100)->nullable();
			$table->string('country', 100)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('photo')->nullable();
			$table->enum('gender', array('Laki-laki', 'Perempuan'));
			$table->date('birth_date');
			$table->string('birth_place')->nullable();
			$table->string('email')->unique();
			$table->string('website', 100)->nullable();
			$table->text('about_me')->nullable();
			$table->string('fb_id', 50);
			$table->integer('point')->default(0);
			$table->integer('role_id')->unsigned()->default(1);
			$table->timestamp('last_login')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamps();
			$table->foreign('role_id')
			->references('id')->on('user_roles')
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
		Schema::drop('users');
	}

}
