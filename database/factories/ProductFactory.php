<?php

use Faker\Generator as Faker;

$factory->define(CodeShopping\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'description' => $faker->text,
        'price' => 10.50,
        'stock' => $faker->boolean,
    ];
});
