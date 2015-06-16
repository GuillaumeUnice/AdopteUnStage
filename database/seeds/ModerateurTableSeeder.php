<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Moderateur;

class ModerateurTableSeeder extends Seeder {

    public function run()
    {
        DB::table('moderateurs')->delete();
        Moderateur::create([]);
    }
}
