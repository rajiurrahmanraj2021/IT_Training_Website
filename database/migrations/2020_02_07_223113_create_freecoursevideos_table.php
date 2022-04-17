<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreecoursevideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freecoursevideos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('freevideo_category_id');
            $table->LONGTEXT('video_title');
            $table->LONGTEXT('video_link');
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
        Schema::dropIfExists('freecoursevideos');
    }
}
