<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\OffreStage;

class OffreStageTableSeeder extends Seeder {

    public function run()
    {

        DB::table('offre_stages')->delete();

        OffreStage::create([
                'entreprise_id' => '1',
                'title'=>'Developpeur en Java chez I3S',
                'duree' => '2-6 mois',
                'description' => 'offre stage: competance demande Java',
                'nom_contact' => 'M.Françoi',
                'email' => 'francoi@exmple.com',
                'tel'=>'0889876755',
                'horaire' => '35h',
        ]);
        OffreStage::create([
                'entreprise_id' => '1',
                'title'=>'Developpeur en C++ chez Inria',
                'duree' => '2-6 mois',
                'description' => 'experiences de 3ans de developpement en C++',
                'nom_contact' => 'M.Françoi',
                'email' => 'francoi@exmple.com',
                'tel' => '0234565432',
                'horaire' => '35h',
        ]);

    }
}