<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffreStagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offre_stages', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('entreprise_id')->unsigned()->nullable();
            $table->string('title')->uniqid();
            $table->timestamp('date_debut')->nullable();
            $table->integer('duree')->nullable();
            $table->text('description', 10000);
            $table->string('nom_contact')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('horaire')->nullable();
            $table->string('gratification')->nullable();
            $table->text('adresse_stage')->nullable();
            $table->boolean('valide');
            $table->integer('stagiaire_id')->unsigned()->nullable();
            $table->integer('promotion_id')->unsigned()->nullable();
            $table->integer('specialite_id')->unsigned()->nullable();
            $table->integer('feedback_id')->unsigned()->nullable();


			$table->timestamps();

            $table->integer('user_id')->unsigned()->nullable();

            $table->foreign('stagiaire_id')->references('id')->on('etudiants')->onDelete('set null');
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('set null');
            $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('set null');
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('feedback_id')->references('id')->on('feedbacks')->onDelete('set null');
		});

        Schema::create('competence_offre_stage', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('competence_id')->unsigned();
            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');

            $table->integer('offre_stage_id')->unsigned();
            $table->foreign('offre_stage_id')->references('id')->on('offre_stages')->onDelete('cascade');
        });

        Schema::create('offre_stage_specialite', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('specialite_id')->unsigned();
            $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('cascade');

            $table->integer('offre_stage_id')->unsigned();
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

        Schema::drop('offre_stage_specialite');
        Schema::drop('competence_offre_stage');
        Schema::drop('offre_stages');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
