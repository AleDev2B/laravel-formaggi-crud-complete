<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Formaggio;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Formaggio::class, function (Faker $faker) {
    return [
      'name' => $faker->word(),
      'colore' => $faker->colorName(),
      'stagionatura'=> $faker->numberBetween(2,24),
      'provenienza'=> $faker->country(),
      'certBiologica'=> $faker->boolean()
    ];
});
