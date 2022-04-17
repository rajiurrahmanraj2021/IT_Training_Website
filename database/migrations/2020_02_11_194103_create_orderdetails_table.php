<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('order');
            $table->LONGTEXT('delivary_address')->nullable();
            $table->string('payment');
            $table->string('bks_number')->nullable();
            $table->TEXT('bks_trxid')->nullable();
            $table->string('rocket_number')->nullable();
            $table->TEXT('rocket_trxid')->nullable();
            $table->string('condition');
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
        Schema::dropIfExists('orderdetails');
    }
}
