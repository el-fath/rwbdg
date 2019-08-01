<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Model\Config::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'favicon' => $faker->word.".ico",
        'logo' => $faker->word.".jpg",
        'meta_description' => $faker->word,
        'meta_keyword' => $faker->word,
        'meta_desc' => $faker->word,
        'head_script' => $faker->word,
        'body_script' => $faker->word
    ];
});
