<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_encuestador = Role::where('name', 'encuestador')->first();
        // $role_admin = Role::where('name', 'admin')->first();
        $role_super = Role::where('name', 'super')->first();

        $user = new User();
        $user->name = 'Encuestador';
        $user->email = 'encuestador@example.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_encuestador);

        // $user = new User();
        // $user->name = 'Admin';
        // $user->email = 'admin@example.com';
        // $user->password = bcrypt('12345678');
        // $user->save();
        // $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Supervisor';
        $user->email = 'super@example.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_super);

        $users = [
            [
                "Alberto Ojeda",
                "aojeda", "262", 'admin'
            ],
            [
                "Rosario Garrido",
                "rgarrido", "479", 'admin'
            ],
            [
                "Silvia Gauna",
                "sgauna", "898", 'admin'
            ],
            [
                "Micaela Miranda",
                'mmiranda', "592", 'encuestador'
            ],
            [
                "Anahi Rodriguez",
                'arodriguez', "861", 'encuestador'
            ],
            [
                "Alejandro González",
                'agonzalez', "098", 'encuestador'
            ],
            [
                "Karana Solís",
                'ksolis', "828", 'encuestador'
            ],
            [
                "Ayelén Obregón",
                'aobregon', "223", 'encuestador'
            ],
            [
                "Joaquina Sanchez",
                'jsanchez', "037", 'admin'
            ],
            [
                "Gustavo",
                'gustavo', "233", 'encuestador'
            ]
        ];

        foreach ($users as $user) {
            $u  = new User();

            $u->password = bcrypt($user[2]);
            $u->codigo = ($user[2]);
            $u->email = ($user[1]);
            $u->name = ($user[0]);
            $u->rol = ($user[3]);
            $u->save();
        }
    }
}
