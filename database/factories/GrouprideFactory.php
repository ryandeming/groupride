<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Groupride;
use Faker\Generator as Faker;

$factory->define(Groupride::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'zip' => $faker->numberBetween(10000, 99999)
    ];
});
