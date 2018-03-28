<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Model' => $faker->name,
        'Year'=> $faker->numberBetween($min = 2000, $max = 2018),
        'Make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),



    ];
});
