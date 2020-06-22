<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'logo_uri' => $faker->unique()->imageUrl(),
        'club_state' => $faker->state
    ];
});
