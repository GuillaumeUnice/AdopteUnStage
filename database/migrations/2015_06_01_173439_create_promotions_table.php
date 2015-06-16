<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('promotions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
        });

        Schema::create('moderateur_promotion', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('promotion_id')->unsigned();
            $table->integer('moderateur_id')->unsigned();

            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');
            $table->foreign('moderateur_id')->references('id')->on('moderateurs')->onDelete('cascade');
        });

        Schema::create('promotion_specialite', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('promotion_id')->unsigned();
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');

            $table->integer('specialite_id')->unsigned();
            $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('cascade');
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

        Schema::drop('promotion_moderateur');
        Schema::drop('promotions');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
