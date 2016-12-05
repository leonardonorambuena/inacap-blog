<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creación de los roles
        $this->call(RoleTableSeeder::class);
        // creacion de los usuarios 
        $this->call(UsersTableSeeder::class);
        // creacion de hablidades 
        $this->call(SkillTableSeeder::class);
    }
}
