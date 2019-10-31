<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Petugas;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Petugas::class, function (Faker $faker) {
    return [
        'petugas_kode' => $faker->unique()->randomNumber,
        'petugas_nama' => $faker->name,
    ];
});
