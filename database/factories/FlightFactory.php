<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Flight;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'departure' => $faker->city,
        'destination' => $faker->city,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000),
        'date' => $faker->date($format = 'Y-m-d', $min = 'now'),
        'time' => $faker->time($format = 'H:i:s'),
    ];
});
