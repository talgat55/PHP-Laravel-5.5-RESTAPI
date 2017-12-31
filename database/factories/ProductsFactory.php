<?php

use Faker\Generator as Faker;
use App\Products;
$factory->define(App\Products::class, function (Faker $faker) {
    return [
	'name' => $faker->name,
	'prices' =>  mt_rand(10,120),
    ];
});
