<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Product;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'product_id' => function(){
        return Product::all()->random();
        },
        'review' => $faker->paragraph,
        'customer' => $faker->name,
        'star' => $faker->numberBetween(0, 5)


    ];
});
