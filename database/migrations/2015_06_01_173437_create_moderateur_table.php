<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModerateurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('moderateurs', function(Blueprint $table)
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

        Schema::drop('moderateurs');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
