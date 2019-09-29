<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Progress;
use Faker\Generator as Faker;

$factory->define(Progress::class, function (Faker $faker) {
    return [
        'student_id' => factory('App\User'),
        'course_id' => factory('App\Course'),
        'chapter_id' => rand(1, 10),
    ];
});
