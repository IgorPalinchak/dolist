<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_tasks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->index('name');
			$table->text('description', 65535)->nullable();
			$table->integer('users_category_id')->index('user_cat');
			$table->integer('user_id')->index('user_id_task');
			$table->dateTime('created_at')->nullable();
			$table->dateTime('do_till')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_tasks');
	}

}
