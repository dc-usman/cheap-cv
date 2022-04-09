<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->unique()->safeEmail(),
        'subject' => $faker->name(),
        'phone'=> $faker->phoneNumber(),
        'detail' => Str::random(10)
    ];
});

