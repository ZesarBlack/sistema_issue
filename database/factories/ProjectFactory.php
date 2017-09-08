<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'nombre' => $faker->sentence(),
      'fentrega'=> $faker->('2017-12-29'),
    ];
});
