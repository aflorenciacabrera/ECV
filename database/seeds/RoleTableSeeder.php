<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $role = new Role();
        // $role->name = 'admin';
        // $role->description = 'Administrator';
        // $role->save();
        
       
        
        $role = new Role();
        $role->name = 'super';
        $role->description = 'Supervisor';
        $role->save();

        $role = new Role();
        $role->name = 'encuestador';
        $role->description = 'Encuestador';
        $role->save();
    }
}
