<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('competences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom');
		});

        Schema::create('competence_etudiant', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('competence_id')->unsigned();
            $table->integer('etudiant_id')->unsigned();

            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
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

		Schema::drop('competences');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
