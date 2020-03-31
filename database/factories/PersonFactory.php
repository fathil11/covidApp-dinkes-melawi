<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween(5, 90),
        'gender' => $faker->randomElement(['m', 'f']),
        'district' => $faker->numberBetween(0, 10),
        'address' => $faker->address(),
        'status' => 0,
    ];
});
