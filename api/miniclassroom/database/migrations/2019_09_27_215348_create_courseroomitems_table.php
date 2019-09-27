<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseroomitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseroomitems', function (Blueprint $table) {
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
            $table->float('price', 8,2)->default(0.00);
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
        Schema::dropIfExists('courseroomitems');
    }
}
