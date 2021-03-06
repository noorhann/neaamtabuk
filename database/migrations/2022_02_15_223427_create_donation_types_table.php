<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationTypesTable extends Migration
{

    public function up()
    {
        Schema::create('donation_types', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('slug_en');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('donation_types');
    }
}
