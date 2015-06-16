<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Etudiant;

class EtudiantTableSeeder extends Seeder {

    public function run()
    {

        DB::table('etudiants')->delete();

        Etudiant::create([
            'website' => 'www.etudiant1.fr',
            'social' => 'facebook.fr/etudiant1',
        ]);

    }
}
