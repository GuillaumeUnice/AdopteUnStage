<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etudiants', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('promotion_id')->unsigned()->nullable();
            $table->integer('specialite_id')->unsigned()->nullable();
            $table->boolean('recherche')->default(1);
            $table->string('cv')->nullable();
            $table->string('website')->nullable();
            $table->string('social')->nullable();
			$table->timestamps();

            $table->foreign('promotion_id')->references('id')->on('promotions')->onUpdate('cascade');
            $table->foreign('specialite_id')->references('id')->on('specialites')->onUpdate('cascade');
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

        Schema::drop('etudiants');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
