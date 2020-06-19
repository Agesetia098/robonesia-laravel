<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
    return [
        'program_id' => 1,
        'user_id' => 1,
        'nama' => $faker->name(),
    ];
});
