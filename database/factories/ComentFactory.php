<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coment;
use Faker\Generator as Faker;

$factory->define(Coment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => rand(1,5),
    ];
});
