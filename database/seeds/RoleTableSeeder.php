<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RoleTableSeeder extends Seeder {
    public function run()
    {

        DB::table('roles')->delete();
        Role::create(array('nom' => 'administrateur', 'autorisation' => 100));
        Role::create(array('nom' => 'moderateur', 'autorisation' => 90));
        Role::create(array('nom' => 'etudiant', 'autorisation' => 50));
        Role::create(array('nom' => 'entreprise', 'autorisation' => 30));

    }
}
