<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Promotion;

class PromotionTableSeeder extends Seeder{

    public function run(){
        DB::table('promotions')->delete();
        Promotion::create(['nom' => 'SI3']);
        Promotion::create(['nom' => 'SI4']);
        Promotion::create(['nom' => 'SI5']);
        Promotion::create(['nom' => 'MAM3']);
        Promotion::create(['nom' => 'MAM4']);
        Promotion::create(['nom' => 'MAM5']);
        Promotion::create(['nom' => 'BAT3']);
        Promotion::create(['nom' => 'BAT4']);
        Promotion::create(['nom' => 'BAT5']);
        Promotion::create(['nom' => 'ELEC3']);
        Promotion::create(['nom' => 'ELEC4']);
        Promotion::create(['nom' => 'ELEC5']);
        Promotion::create(['nom' => 'GE3']);
        Promotion::create(['nom' => 'GE4']);
        Promotion::create(['nom' => 'GE5']);
        Promotion::create(['nom' => 'GB3']);
        Promotion::create(['nom' => 'GB4']);
        Promotion::create(['nom' => 'GB5']);
        Promotion::create(['nom' => 'CIP1']);
        Promotion::create(['nom' => 'CIP2']);
    }


}