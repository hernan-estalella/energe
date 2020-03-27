<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(). ' ' . $faker->lastName,
        'address' => str_replace("\n",", ",$faker->address),
        'lat' => $faker->randomFloat(6,-40.951720,-22.746767),
        'lng' => $faker->randomFloat(6,-67.073918,-54.059590),
        'zone_id' => $faker->numberBetween(1,3),
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->tollFreePhoneNumber
    ];
});
