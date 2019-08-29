<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => 'Новость о ' . $faker->text(20),
        'author' => mt_rand(1, 2),
        'text' => $faker->text,
        'photo' => '/img/news/news-0' . mt_rand(0, 9) . '.jpg',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
