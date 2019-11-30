<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaitReciveVichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wait_recive_viches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('payid');
            $table->string('type')->nullable();
            $table->integer('year')->nullable();
            $table->string('model')->nullable();
            $table->string('vendor')->nullable();
            $table->string('color')->nullable();
            $table->string('new')->nullable();
            $table->text('status')->nullable();
            $table->integer('ownerID')->nullable();
            $table->float('price')->nullable();
            $table->string('Auction_type')->nullable();//نوع المزاد
            $table->string('location')->nullable();
            $table->boolean('Guarant')->nullable();
            $table->integer('viewers')->default(0);
            $table->text('image')->nullable();
            $table->timestamp('producttime')->nullable();
            $table->string('Accept_seller')->default('no');
            $table->string('Accept_buyer')->default('no');
            $table->text('Complaint_buyer')->nullable();
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
        Schema::dropIfExists('wait_recive_viches');
    }
}
