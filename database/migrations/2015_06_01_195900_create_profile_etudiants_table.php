<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileEtudiantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_etudiants', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->text('professionnel')->nullable();
            $table->text('education')->nullable();
			$table->timestamps();

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

        Schema::drop('profile_etudiants');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
