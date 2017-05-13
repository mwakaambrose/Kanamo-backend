<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Event::class, function (Faker\Generator $faker) {

    return [
        // location info
        'city' => $faker->city,
        'state' => $faker->state,
        'street_address' => $faker->streetAddress,
        'post_code' => $faker->postcode,
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
