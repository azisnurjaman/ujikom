<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Penerbit;
use Faker\Generator as Faker;

$factory->define(Penerbit::class, function (Faker $faker) {
    return [
        'penerbit_kode' => $faker->unique()->randomNumber,
        'penerbit_nama' => $faker->name,
        'penerbit_alamat' => $faker->address,
        'penerbit_tlpn' => $faker->phoneNumber,
    ];
});
