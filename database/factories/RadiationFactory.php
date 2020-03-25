<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Radiation;
use Faker\Generator as Faker;

$factory->define(Radiation::class, function (Faker $faker) {
    return [
        /* 'm_1' => $faker->randomFloat(2, 3.00, 6.99),
        'm_2' => $faker->randomFloat(2, 3.00, 6.99),
        'm_3' => $faker->randomFloat(2, 3.00, 6.99),
        'm_4' => $faker->randomFloat(2, 3.00, 6.99),
        'm_5' => $faker->randomFloat(2, 3.00, 6.99),
        'm_6' => $faker->randomFloat(2, 3.00, 6.99),
        'm_7' => $faker->randomFloat(2, 3.00, 6.99),
        'm_8' => $faker->randomFloat(2, 3.00, 6.99),
        'm_9' => $faker->randomFloat(2, 3.00, 6.99),
        'm_10' => $faker->randomFloat(2, 3.00, 6.99),
        'm_11' => $faker->randomFloat(2, 3.00, 6.99),
        'm_12' => $faker->randomFloat(2, 3.00, 6.99) */
        'm_1' => 6.23,
        'm_2' => 5.91,
        'm_3' => 5.46,
        'm_4' => 4.64,
        'm_5' => 3.70,
        'm_6' => 3.09,
        'm_7' => 3.32,
        'm_8' => 3.98,
        'm_9' => 4.62,
        'm_10' => 5.63,
        'm_11' => 6.09,
        'm_12' => 6.23
    ];
});
