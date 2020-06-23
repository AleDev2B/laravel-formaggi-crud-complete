<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Formaggio;
use Faker\Generator as Faker;

$factory->define(Formaggio::class, function (Faker $faker) {
    return [
      'name' => $faker->word(),
      'colore' => $faker->colorName(),
      'stagionatura'=> $faker->numberBetween(2,24),
      'provenienza'=> $faker->country(),
      'certBiologica'=> $faker->boolean()
    ];
});
