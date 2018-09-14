<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertiserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertiser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('request_id');
            $table->double('width');
            $table->double('height');
            $table->string('resource');
            $table->string('colors');
            $table->integer('adv_category_id');
            $table->string('car_place');
            $table->string('description');
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
        Schema::dropIfExists('advertiser');
    }
}
