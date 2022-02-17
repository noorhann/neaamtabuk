<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('donation_id');
            $table->integer('delegate_id');
            $table->integer('recipient_id');
            $table->integer('status_id');
            $table->foreign('status_id')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('close_at');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
