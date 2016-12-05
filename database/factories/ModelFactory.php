<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'user_name' => $faker->unique()->userName(),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail(),
        'password' =>  'secret',
        'remember_token' => str_random(10),
        'phone' => $faker->phoneNumber(),
        'section' => '2016',
        'role_id' => rand(2,3),
    ];
});

$factory->define(App\Skill::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->sentence()
    ];
});

