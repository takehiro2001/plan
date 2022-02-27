<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'date' => $faker->date,
        'muscle' => $faker->word,
        'body' => $faker->text($maxNbChars = 2),
    ];
});
