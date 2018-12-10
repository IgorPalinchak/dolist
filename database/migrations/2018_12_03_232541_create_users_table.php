<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->integer('id', true);
			$table->char('name', 50)->index('name');
			$table->char('email', 50)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 250);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('role_id');
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
