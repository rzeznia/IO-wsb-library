<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['user', 'admin'];
        foreach($names as $name){
            Role::create(['name' => $name]);
        }
    }
}
