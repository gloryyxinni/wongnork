<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('Review_id');
       
            $table->foreign('User_id')->references('id')->on('users');
        
            $table->foreign('Restaurants_id')->references('id')->on('restaurants');
            
            $table->foreign('Rating_Rating_id')->references('id')->on('rating');
            
            $table->foreign('Comment_Comment_id')->references('id')->on('comment');
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
        Schema::dropIfExists('review');
    }
}
