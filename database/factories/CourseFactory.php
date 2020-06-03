<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'year_id' => $faker->numberBetween(1,10),
        'name' => $faker->name,
        'doctor_id' => $faker->numberBetween(1,10),
    ];
});
