<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create();
        factory(App\Subject::class, 15)->create();
        factory(App\Course::class, 55)->create();
        factory(App\Document::class, 50)->create();
        factory(App\Classroom::class, 10)->create();
        factory(App\Progress::class, 10)->create();
    }
}
