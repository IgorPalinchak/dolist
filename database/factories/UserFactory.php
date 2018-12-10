<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/



$factory->defineAs(App\User::class, 'admin', function (Faker $faker) {
    return [
        'name'=>'Admin',
        'email'=>'ipalinchak@yahoo.com',
        'email_verified_at' => now(),
        'password' => bcrypt('111111'),
        'remember_token' => str_random(10),
        'role_id'=>last(factory(App\Modesl\Role::class, 'admin', 1)->create()->pluck('id')->toArray())
    ];
});

$factory->defineAs(App\Modesl\Role::class, 'admin', function () {
    return [
        'alias'=>'Admin',
        'name'=>'Admin',
    ];
});

$factory->defineAs(App\User::class, 'default' , function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('22222'),
        'remember_token' => str_random(10),
        'role_id'=>'1'
    ];
});

$factory->defineAs(App\Modesl\Role::class, 'default', function (Faker $faker) {
    return [
        'alias'=>'default',
        'name'=>$faker->firstName,
    ];
});
