<?php

use Illuminate\Database\Seeder;

use App\Role;
use Carbon\Carbon;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'short_name' => 'Admin',
        	'name' => 'Administrator',
        	'description' => 'Administrador del Sistema',
        	'created_at' => Carbon::now(),
        	]);

        DB::table('roles')->insert([
        	'short_name' => 'Edit',
        	'name' => 'Editor',
        	'description' => 'Editor de Posts',
        	'created_at' => Carbon::now(),
        	]);
        DB::table('roles')->insert([
        	'short_name' => 'User',
        	'name' => 'User',
        	'description' => 'Usuario del Sistema',
        	'created_at' => Carbon::now(),
        	]);
    }
}
