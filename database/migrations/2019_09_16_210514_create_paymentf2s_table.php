<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentf2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentf2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ownerID');
            $table->integer('productID')->default(0);
            $table->string('paymentBrand');
            $table->string('number');
            $table->string('expiry');
            $table->string('holder');
            $table->string('cvv');
            $table->integer('price');
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
        Schema::dropIfExists('paymentf2s');
    }
}
