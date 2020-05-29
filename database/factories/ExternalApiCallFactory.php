<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use CodencoDev\ExternalApiCallRecorder\Models\ExternalApiCall;
use Faker\Generator as Faker;

$factory->define(ExternalApiCall::class, function (Faker $faker) {
    return [
        'sent_payload' => $faker->text,
        'received_payload' => $faker->text,
        'path' => parse_url($faker->url,PHP_URL_PATH),
        'body' => $faker->text,
        'return' => $faker->text,
        'token' => $faker->word,
        'status' => $faker->randomElement(['200','204','401','403']),
        'external_api_id' => factory(\CodencoDev\ExternalApiCallRecorder\Models\ExternalApi::class),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
