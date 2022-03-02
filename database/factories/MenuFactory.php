<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1,$max=1),
        'date' => $faker->dateTime,
        'muscle' => $faker->word,
        'body' => $faker->text($maxNbChars = 5),
    ];
});
