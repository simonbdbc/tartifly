<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {
    return [
        //
        'libelle' => $faker->name,
        'pays' => $faker->country,
        'ville' => $faker->city,
        'duree' => $faker->randomDigitNotNull,
        'date_debut' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_fin' => $faker->date($format = 'Y-m-d'),
        'cout' => $faker->numberBetween($min = 200, $max = 5000),
        'photo' => $faker->imageUrl($width = 640, $height = 480, 'city'),
        'description' => $faker->sentence,
        'disponibilite' => true
    ];
});
