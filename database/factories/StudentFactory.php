<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'username' => $faker->name,
        'card_id' => $faker->numberBetween(1,10),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($faker->password),
        'year_id' => $faker->numberBetween(1,4),
        'course_id' => $faker->numberBetween(1,10),
    ];
});
