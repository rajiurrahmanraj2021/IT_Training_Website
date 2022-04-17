<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmadersomporkesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amadersomporkes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('about_img')->default('about_img.jpg');
            $table->LONGTEXT('description1');
            $table->LONGTEXT('description2');
            $table->LONGTEXT('description3')->nullable();
            $table->LONGTEXT('description4')->nullable();
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
        Schema::dropIfExists('amadersomporkes');
    }
}
