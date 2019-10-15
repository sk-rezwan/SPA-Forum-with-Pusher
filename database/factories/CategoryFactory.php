<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Category::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => $word,
        'slug' => str_slug($word)
    ];
});