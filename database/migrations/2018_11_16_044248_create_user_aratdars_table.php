<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAratdarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_aratdars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('status');
            $table->string('Division');
            $table->string('District');
            $table->string('upazila');
            $table->string('address');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->nullable();
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
        Schema::dropIfExists('user_aratdars');
    }
}
