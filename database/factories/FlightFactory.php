<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Flight;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    $now = date('Y-m-d');
    $date = $faker->dateTimeBetween($now , '+2 years');
    return [
        'departure' => $faker->city,
        'destination' => $faker->city,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        'date' => $date,
        'time' => $faker->time($format = 'H:i:s'),
    ];
});
