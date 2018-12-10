<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_categories', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->index('name');
			$table->integer('parent_id')->default('0');
			$table->integer('user_id')->index('user_Id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_categories');
	}

}
