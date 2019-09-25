<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('role_id');
            $table->integer('courseroom_id');
            $table->string('media')->nullable();
            $table->string('course_title')->nullable();
            $table->string('course_desc')->nullable();
            $table->integer('duration')->default(0);
            $table->integer('student_id')->nullable();
            $table->integer('joined')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseitems');
    }
}
