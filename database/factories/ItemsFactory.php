<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Items;
use Faker\Generator as Faker;
// use App\Items;


$factory->define(Items::class, function (Faker $faker) {
    return [
        'item_name' => $faker->word,
        'price_per_item' => $faker->numberBetween($min = 10, $max = 200),
        'item_img'=>$faker->imageUrl(),
        'description'=>$faker->text(rand(20,200)),
        'in_stock'=>$faker->numberBetween($min = 10, $max = 50),
        'charity_id'=>$faker->randomDigit,
        // $faker->()->randomDigit;


    ];
});

// $factory->define(Items::class, function (Faker $faker) {
//     return [

//     ];
// });
