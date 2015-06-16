<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrepriseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('entreprises', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->string('logo', 60)->nullable();
            $table->text('description', 1000)->nullable();
            $table->bigInteger('siret')->nullable();
            $table->string('lieu', 60)->nullable();
            $table->string('secteur', 255)->nullable();
            $table->integer('taille')->nullable();

            $table->string('site', 60)->nullable();
            $table->string('sociaux', 60)->nullable();

            $table->string('fax', 60)->nullable();
            $table->string('telephone', 60)->nullable();

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

        Schema::drop('entreprises');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
