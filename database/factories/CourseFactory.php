<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User'),
        'subject_id' => rand(1,15),
        'title' => $faker->sentence(6),
        'image' => $faker->image('courses',640,480, null, false),
        'description' => $faker->paragraph(),

    ];
});
