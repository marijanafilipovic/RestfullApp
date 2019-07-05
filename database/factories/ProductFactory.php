<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->desctiption,
        'price' => $faker->numberBetween(100,1000),
        'discount' => $faker->numberBetween(2,30),
        'slug' => $faker->slug(7)
    ];
});
