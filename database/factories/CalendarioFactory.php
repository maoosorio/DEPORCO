<?php

use App\Models\Calendario;
use Faker\Generator as Faker;

$factory->define(Calendario::class, function (Faker $faker) {
    return [
        'numero_jornada' => $faker->numberBetween(1,50),
        'fecha' => $faker->date(),
        'torneo_id' => \App\Models\Torneo::all()->random()->id,
        'avance_id' => \App\Models\CalendarioAvance::all()->random()->id,
        'user_id' => 2
    ];
});
