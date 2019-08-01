<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Model\Profile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'address' => $faker->address,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'social_facebook' => $faker->word,
        'social_twitter' => $faker->word,
        'social_instagram' => $faker->word,
        'latitude' => $faker->randomDigit,
        'longitude' => $faker->randomDigit,
    ];
});
