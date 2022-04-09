<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        "paper_topic" => $faker->name(),
        "paper_type" => $faker->name(),
        "deadline" => $faker->name(),
        "subject_area" => $faker->name(),
        "number_of_pages" => $faker->randomDigit(),
        "academic_level"=> $faker->name(),
        "reference" => $faker->randomDigit(),
        "style" => $faker->name(),
        "cost_per_page" => $faker->randomDigit(),
        "total_price" => $faker->randomDigit(),
        "detail" => $faker->paragraph($nb =8),
        'name' => $faker->name(),
        'email' => $faker->safeEmail(),
        "country" => $faker->name(),
        "phone" => $faker->phoneNumber(),
        "language" => $faker->name(),
        "spacing" => $faker->numberBetween($min = 1, $max = 2),
        "is_complete" => $faker->numberBetween($min = 0, $max = 1),
    ];
});
