<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAratdarProvidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aratdar_provides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aratdar_id');
            $table->string('division');
            $table->string('upazila');
            $table->string('item');
            $table->integer('amount');
            $table->integer('year');
            $table->integer('week');
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
        Schema::dropIfExists('aratdar_provides');
    }
}
