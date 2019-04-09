<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        // 'merek' => 'Honda',
        // 'tipe' => 'Avansa',
        // 'tahun' => '2014',
        // 'nmr_kerangka' => '1234567890',
        // 'nmr_polisi' => 'BF3016CC'
    ];
});
