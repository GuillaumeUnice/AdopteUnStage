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
			$table->string('name', 60);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();

            $table->integer('role_id');
            $table->boolean('valide');

            $table->string('user_type', 60);
            $table->integer('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::drop('users');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }

}
