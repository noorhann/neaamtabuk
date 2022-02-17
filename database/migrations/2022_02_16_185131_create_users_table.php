<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            
            $table->unsignedBigInteger('role_id');
            //$table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedBigInteger('donation_type_id');
            //$table->foreign('donation_type_id')->references('id')->on('donation_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->unique();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('gender');
            $table->string('address');
            $table->string('region');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
