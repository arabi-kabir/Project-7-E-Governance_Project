<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('req_user_id');

            $table->string('district');
            $table->string('upazila');

            $table->string('type');
            $table->string('item');
            $table->string('amount');
            $table->string('req_date');
            $table->string('exp_year');
            $table->string('exp_month');
            $table->string('exp_date');
            $table->string('status');
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
        Schema::dropIfExists('market_requests');
    }
}
