<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Radiation;
use Faker\Generator as Faker;

$factory->define(Radiation::class, function (Faker $faker) {
    return [
        'm_1' => $faker->randomFloat(2, 3.00, 6.99),
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
        'm_12' => $faker->randomFloat(2, 3.00, 6.99)
    ];
});
