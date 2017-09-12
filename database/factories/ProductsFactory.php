<?php

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


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
        'weight' => $faker->randomNumber(3),
        'color' => $faker->colorName,
        'company' => $faker->company,
        'country' => $faker->country,
        'features' => $faker->paragraph(2, true),
    ];
});