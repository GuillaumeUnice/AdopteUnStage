<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Langue;

class LangueTableSeeder extends Seeder {

    public function run()
    {
        DB::table('langues')->delete();
        Langue::create(['nom' => 'FR']);
    }

}
