<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDivisionalOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_divisional_officers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('Division')->unique();
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
        Schema::dropIfExists('user_divisional_officers');
    }
}
