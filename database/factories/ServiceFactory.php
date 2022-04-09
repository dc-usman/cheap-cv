<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->name(),
        'slug' => $faker->unique()->slug(),
        'canonical' => $faker->unique()->url(),
        'meta_description'=> $faker->unique()->paragraph($nb =2),
        'html'=> $faker->randomHtml(2,3),
        'user_id' => 1,
        'is_published' => $faker->boolean()
    ];
});
