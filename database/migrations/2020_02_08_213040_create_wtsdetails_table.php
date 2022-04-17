<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWtsdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wtsdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('wts_category_id');
            $table->string('wts_img')->default('wts_img.jpg');
            $table->LONGTEXT('offer_one')->nullable();
            $table->LONGTEXT('offer_two')->nullable();
            $table->LONGTEXT('offer_three')->nullable();
            $table->LONGTEXT('offer_four')->nullable();
            $table->LONGTEXT('offer_five')->nullable();
            $table->LONGTEXT('offer_six')->nullable();
            $table->LONGTEXT('offer_seven')->nullable();
            $table->LONGTEXT('offer_eight')->nullable();
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
        Schema::dropIfExists('wtsdetails');
    }
}
