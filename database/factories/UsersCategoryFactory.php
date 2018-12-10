<?php

use Faker\Generator as Faker;

$factory->defineAs(App\Modesl\UsersCategory::class, 'cat', function (Faker $faker) {
    return [
        'name'=>$faker->sentence(2),
        'parent_id'=>'0',
        'user_id' => '1',
    ];
});


$factory->defineAs(App\Modesl\UsersTask::class, 'cat_task', function (Faker $faker) {
    return [
        'name'=>'Task: '.$faker->sentence(2),
        'users_category_id'=>'0',
        'user_id' => '1',
        'description'=>$faker->text(500),
        'do_till'=>$faker->dateTimeThisMonth()
    ];
});

