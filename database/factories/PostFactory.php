<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(50),
        'slug' => $faker->slug(),
        'banner' => $faker->imageUrl($width = 640, $height = 480),
        'content' => $faker->text(500),
    ];
});
