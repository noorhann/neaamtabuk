<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{

    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->integer('donation_number')->random_int('1000000','9999999');

            $table->unsignedBigInteger('category_id');
            //$table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedBigInteger('donor_id');
            //$table->foreign('donor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
            $table->boolean('ready_to_distribute');
            $table->boolean('ready_to_pack');
            
            $table->unsignedBigInteger('status_id');
            //$table->foreign('status_id')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('donates');
    }
}
