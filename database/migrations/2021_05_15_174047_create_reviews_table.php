<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->bigInteger('User_id')->unsigned();
            $table->foreign('User_id')->references('id')->on('users');

            $table->bigInteger('Restaurant_id')->unsigned();
            $table->foreign('Restaurant_id')->references('id')->on('restaurants');

            $table->bigInteger('Rating_Rating_id')->unsigned();
            $table->foreign('Rating_Rating_id')->references('id')->on('ratings');

            $table->bigInteger('Comment_Comment_id')->unsigned();
            $table->foreign('Comment_Comment_id')->references('id')->on('comments');

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
        Schema::dropIfExists('reviews');
    }
}
