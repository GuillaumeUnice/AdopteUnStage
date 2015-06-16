<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrateurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('administrateurs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
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

        Schema::drop('administrateurs');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
