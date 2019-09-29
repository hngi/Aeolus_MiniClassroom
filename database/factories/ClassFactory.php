<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classroom;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User'),
        'course_id' => factory('App\Course'),
    ];
});
