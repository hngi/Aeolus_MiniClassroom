<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Document;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'course_id' => rand(1, 20),
        'chapter' => rand(1, 10),
        'title' => $faker->sentence(),
        'intro' => $faker->paragraph(3),
        // 'document' => $faker->file()
    ];
});
