<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modules;
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

$factory->define(modules::class, function (Faker $faker) {
    return [
        'content_title' => $faker->name,
        'content_details' => $faker->sentence
    ];
});
