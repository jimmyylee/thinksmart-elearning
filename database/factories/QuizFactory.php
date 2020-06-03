<?php

use Faker\Generator as Faker;

$factory->define(App\Quiz::class, function (Faker $faker) {
    return [
        'quiz_id' => $faker->numberBetween(1,10),
        'title' => $faker->name,
        'content' => $faker->name,
        'grades' => $faker->numberBetween(1,10)
    ];
});
