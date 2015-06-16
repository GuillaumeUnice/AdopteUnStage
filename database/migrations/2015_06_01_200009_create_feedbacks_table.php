<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedbacks', function(Blueprint $table)
		{
			$table->increments('id');

            $table->text('titre', 150);
            $table->text('contenu', 2000);
            $table->text('recrutement_feedback', 2000);
            $table->boolean('isOuvert');

            //$table->integer('etudiant_id')->unsigned()->nullable();
            //$table->foreign('etudiant_id')->references('id')->on('etudiants')->onUpdate('cascade');

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
		Schema::drop('feedbacks');
	}

}
