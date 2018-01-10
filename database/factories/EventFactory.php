<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Event::class, function (Faker\Generator $faker) {

    return [
        // location info
        'address' => $faker->address,
        'post_client_name' => $faker->company,
        'title' => $faker->name,
        'advert' => $faker->text,
        'date' => $faker->date,
        'picture_url' => $faker->randomElement(['/images/one.png', '/images/two.png', '/images/three.png']),
        'start_time' => $faker->time,
        'stop_time' => $faker->time,
        'coordinates' => $faker->randomElement(['0.339013,32.5860253', '0.339013,32.5860253', '0.339013,32.5860253',
            '0.3293572,32.5826565', '0.3293572,32.5826565', '0.3293572,32.5826565', '0.3293572,32.5826565'
            ]),
        'price' => $faker->numberBetween(2000, 500000),
    ];
});
