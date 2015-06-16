<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantOffreStageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etudiant_offre_stage', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->integer('offre_stage_id')->unsigned();
			$table->timestamps();

            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('offre_stage_id')->references('id')->on('offre_stages')->onDelete('cascade');

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

        Schema::drop('etudiant_offre_stage');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
