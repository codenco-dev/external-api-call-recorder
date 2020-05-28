<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use CodencoDev\ExternalApiCallRecorder\Models\ExternalApi;
use Faker\Generator as Faker;

$factory->define(ExternalApi::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
    ];
});
