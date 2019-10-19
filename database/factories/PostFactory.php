<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->url,
        'description' =>  $faker->text,
        'user_id' => '3',
        'body' =>  $faker->sentence,
        'created_at' =>  $faker->dateTime,
        'updated_at' =>  $faker->dateTime,



    ];
});
