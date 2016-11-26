<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
        DB::table('roles')->insert([
        	'short_name' => 'Admin',
        	'name' => 'Administrador',
        	'description' => 'Adminisrador del Sistema',
        	'created_at' => Carbon::now(),
        	]);

        DB::table('roles')->insert([
        	'short_name' => 'Edit',
        	'name' => 'Editor',
        	'description' => 'Editor del Sistema',
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
