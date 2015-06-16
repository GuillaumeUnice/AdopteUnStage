<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('langues', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nom');
		});

        Schema::table('profile_etudiants', function(Blueprint $table)
        {
            $table->integer('langue_id')->unsigned();
            $table->foreign('langue_id')->references('id')->on('langues')->onDelete('cascade');
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

        Schema::drop('langues');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
