<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        // location info
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,

        // business info
        'business_name' => $faker->company,

        // event info
        'title' => $faker->name,
        'description' => $faker->text,
        'start_time' => $faker->date,
        'end_time' => $faker->date,
        'price' => str_random(10),
    ];
});
