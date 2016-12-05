<?php

use Illuminate\Database\Seeder;
use App\Skill;
class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Skill::class)->create([
        	'name' => 'Desarrollador WEB'
        	]);

        factory(Skill::class)->create([
        	'name' => 'DBO'
        	]);

        factory(Skill::class)->create([
        	'name' => 'DBA'
        	]);

        factory(Skill::class)->create([
        	'name' => 'BACK END'
        	]);

        factory(Skill::class)->create([
        	'name' => 'FRONT END'
        	]);
    }
}
