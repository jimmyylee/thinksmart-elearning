<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph(1),
        'doctor_id' => $faker->numberBetween(1,10),
    ];
});
