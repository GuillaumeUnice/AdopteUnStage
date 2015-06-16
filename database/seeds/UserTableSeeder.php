<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        $roles = Role::orderBy('id')->get(array('id'));

        User::create(array('name' => 'entreprise1', 'email' => 'entreprise1@gmail.com', 'password' => Hash::make('azerty'),
            'role_id' => $roles[3]->id, 'valide' => 1,'user_type' => 'App\Entreprise', 'user_id' => '1'
            ));
        User::create(array('name' => 'moderateur1', 'email' => 'moderateur1@gmail.com', 'password' => Hash::make('azerty'),
            'role_id' => $roles[1]->id, 'valide' => 1, 'user_type' => 'App\Moderateur', 'user_id' => '1'
        ));
        User::create(array('name' => 'admin1', 'email' => 'admin1@gmail.com', 'password' => Hash::make('azerty'),
            'role_id' => $roles[0]->id, 'valide' => 1, 'user_type' => 'App\Administrateur', 'user_id' => '1'
        ));
        User::create(array('name' => 'etudiant1', 'email' => 'etudiant1@gmail.com', 'password' => Hash::make('azerty'),
            'role_id' => $roles[2]->id, 'valide' => 1, 'user_type' => 'App\Etudiant', 'user_id' => '1'
        ));
    }
}
