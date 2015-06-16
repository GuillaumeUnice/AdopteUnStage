<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Entreprise;

class EntrepriseTableSeeder extends Seeder {

    public function run()
    {

        DB::table('entreprises')->delete();

        Entreprise::create([
                'nom' => 'entreprise1',
                'description' => 'description entreprise1',
                'siret' => 1234567891234,
                'lieu' => 'Marseille',
                'taille' => 50,
                'site' => 'entreprise1.com',
                'telephone' => '04 42 69 87 78',
        ]);

    }
}
