<?php

use App\Models\Instituto;
use Faker\Generator as Faker;

$factory->define(Instituto::class, function (Faker $faker) {
    return [
        'codigo_dane' => $faker->unixTime(),
        'nit' => $faker->unixTime(),
        'nombre' => $faker->company,
        'municipio_id' => \App\Models\Municipio::all()->random()->id,
        'tipo_educacion_id' => \App\Models\TipoEducacion::all()->random()->id,
        'telefono_id' => \App\Models\Telefono::all()->random()->id,
        'direccion_id' => \App\Models\Direccion::all()->random()->id,
        'user_id' => 2,
    ];
});
