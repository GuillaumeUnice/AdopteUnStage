<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        //Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('LangueTableSeeder');
        $this->command->info('Langue table seeded!');

        $this->call('RoleTableSeeder');
        $this->command->info('Role table seeded!');

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('EntrepriseTableSeeder');
        $this->command->info('Entreprise table seeded!');

        $this->call('ModerateurTableSeeder');
        $this->command->info('Moderateur table seeded!');

        $this->call('EtudiantTableSeeder');
        $this->command->info('Etudiant table seeded!');

        $this->call('AdministrateurTableSeeder');
        $this->command->info('Administrateur table seeded!');

        $this->call('CompetenceTableSeeder');
        $this->command->info('Competence table seeded!');

        $this->call('PromotionTableSeeder');
        $this->command->info('Promotion table seeded!');

        $this->call('SpecialiteTableSeeder');
        $this->command->info('Specialite table seeded!');

        $this->call('OffreStageTableSeeder');
        $this->command->info('OffreStage table seeded!');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}