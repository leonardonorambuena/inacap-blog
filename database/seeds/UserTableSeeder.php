<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
        	'user_name' => 'lnorambuena',
        	'first_name' => 'Leonardo',
        	'last_name'	=> 'Norambuena',
        	'email' => 'leonardo.norambuena02@inacapmail.cl',
        	'role_id' => 1,
        	'password' => '12345678'
        	]);
        factory(User::class,1000)->create();
    }
}
