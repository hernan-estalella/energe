<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assessor;
use Faker\Generator as Faker;

$factory->define(Assessor::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(). ' ' . $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->tollFreePhoneNumber
    ];
});
