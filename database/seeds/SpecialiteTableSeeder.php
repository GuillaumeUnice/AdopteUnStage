<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Specialite;

class SpecialiteTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('specialites')->delete();
        Specialite::create(['nom' => 'AL'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());
        Specialite::create(['nom' => 'IHM'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());
        Specialite::create(['nom' => 'GMD'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());
        Specialite::create(['nom' => 'IMAFA'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());
        Specialite::create(['nom' => 'CASPAR'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());
        Specialite::create(['nom' => 'WEB'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());
        Specialite::create(['nom' => 'IAM'])->promotion()->attach(\App\Promotion::where('nom','SI5')->first());

        Specialite::where('nom','GMD')->first()->promotion()->attach(\App\Promotion::where('nom','MAM5')->first());
        Specialite::where('nom','IMAFA')->first()->promotion()->attach(\App\Promotion::where('nom','MAM5')->first());
    }
}