<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArColumns extends Migration
{

    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('name_ar');
            $table->string('slug_ar');

        });

        Schema::table('statuses', function (Blueprint $table) {
            $table->string('name_ar');
            $table->string('slug_ar');
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->string('name_ar');
            $table->string('slug_ar');

        });

        Schema::table('donation_types', function (Blueprint $table) {
            $table->string('name_ar');
            $table->string('slug_ar');

        });
    }


    public function down()
    {
        //
    }
}
