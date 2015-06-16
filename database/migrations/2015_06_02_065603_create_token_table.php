<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tokens', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('token', 255)->unique();
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

        Schema::drop('tokens');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
