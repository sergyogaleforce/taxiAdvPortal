<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertiserRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertiser_request', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prod_agency_id');
            $table->string('markets');
            $table->string('car_model');
            $table->string('demographics');
            $table->string('ethnic');
            $table->time('driving_from');
            $table->time('driving_to');
            $table->date('start');
            $table->date('end');
            $table->string('verif_schedule_type'); //monthly or weekly
            $table->string('car_place');
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
        Schema::dropIfExists('advertiser_request');
    }
}
