<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TimeLog;
use Faker\Generator as Faker;

$factory->define(TimeLog::class, function (Faker $faker) {
    return [
        'minutes' => $faker->numberBetween($min = 5, $max = 60),
    ];
});
