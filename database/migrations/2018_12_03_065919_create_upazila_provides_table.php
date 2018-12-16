<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpazilaProvidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upazila_provides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('division');
            $table->string('upazila');
            $table->string('item');
            $table->integer('amount');
            $table->integer('unallocated');
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
        Schema::dropIfExists('upazila_provides');
    }
}
