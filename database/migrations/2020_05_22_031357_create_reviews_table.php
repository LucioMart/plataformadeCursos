<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('couse_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unsinedInteger('user_id');
            $table->unsignedInteger('user_id')->referenses('id')->on('users');
            $table->float('rating', total,2);
            $table->text('comment')->nullable();
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
