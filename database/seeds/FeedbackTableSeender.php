<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Feedback;

class FeedbackTableSeeder extends Seeder {

    public function run()
    {

        DB::table('feedbacks')->delete();

        Feedback::create([
                'titre' => 'une experience geniale chez I3S',
                'contenu'=>'sssssssssssssssssssssssssss',
                'etudiant_id' => '4',
                'entreprise_id' => '1',
        ]);
    }
}