<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comuna;
use Faker\Generator as Faker;

$factory->define(Comuna::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'ciudad_id' => $faker->word,
        'activo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'created_by' => $faker->word,
        'updated_by' => $faker->word,
        'deleted_by' => $faker->word
    ];
});
