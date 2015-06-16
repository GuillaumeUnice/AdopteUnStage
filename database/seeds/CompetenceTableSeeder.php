<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Competence;

class CompetenceTableSeeder extends Seeder {
    public function run()
    {
        DB::table('competences')->delete();

        Competence::create(array('nom' => 'PHP'));
        Competence::create(array('nom' => 'Laravel'));
        Competence::create(array('nom' => 'Angular'));
        Competence::create(array('nom' => 'Symfony'));
        Competence::create(array('nom' => 'JavaScript'));
        Competence::create(array('nom' => 'Java'));
        Competence::create(array('nom' => 'C++'));

    }
}
