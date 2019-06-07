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
    }
}
