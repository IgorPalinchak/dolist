<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_tasks', function(Blueprint $table)
		{
			$table->foreign('users_category_id', 'fk_users_tasks_cats')->references('id')->on('users_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_users_tasks_to_users')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_tasks', function(Blueprint $table)
		{
			$table->dropForeign('fk_users_tasks_cats');
			$table->dropForeign('fk_users_tasks_to_users');
		});
	}

}
