<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Page::class, function (Faker\Generator $faker) {
    static $password;

    return [
      'title' => $faker->name,
      'content' => $faker->text,
      'status' => 1,
      'seo_title' => $faker->word,
      'seo_description' => $faker->word
    ];
});
