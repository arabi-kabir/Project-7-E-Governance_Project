<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUpazilaNirbahiOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_upazila_nirbahi_officers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('Division');
            $table->string('District');
            $table->string('upazila');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('user_upazila_nirbahi_officers');
    }
}
