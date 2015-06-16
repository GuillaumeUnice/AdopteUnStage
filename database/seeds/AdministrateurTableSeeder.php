<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Administrateur;

class AdministrateurTableSeeder extends Seeder {

    public function run()
    {
        DB::table('administrateurs')->delete();
        Administrateur::create([]);
    }
}
