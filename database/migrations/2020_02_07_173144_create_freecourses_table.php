<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freecourses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('freecourse_img')->default('freecourse_img.jpg');
            $table->LONGTEXT('title');
            $table->LONGTEXT('description_one');
            $table->LONGTEXT('description_two')->nullable();
            $table->LONGTEXT('description_three')->nullable();
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
        Schema::dropIfExists('freecourses');
    }
}
