<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Charity;
use Faker\Generator as Faker;

$factory->define(Charity::class, function (Faker $faker) {
    return [
        'Name' => $faker->company,
        'Char_address' => $faker->streetAddress,
        'Char_information' =>$faker->text(rand(10,100)),
        'customer_id'=>$faker->randomDigit,
    ];
});




// $factory->define(Items::class, function (Faker $faker) {
//     return [
//         'Char_information' => $faker->word,
//         'price_per_item' => $faker->numberBetween($min = 10, $max = 1000),
//         'description'=>$faker->text(rand(10,20)),
//         'in_stock'=>$faker->boolean(),
//         'charity_id'=>$faker->randomDigit,
//         // 'charity_id'=>$faker->randomDigit,

//     ];
// });
