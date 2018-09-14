<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyAdvCustomProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_adv_custom_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agency_id');
            $table->string('car_place_name');
            $table->double('width');
            $table->double('height');
            $table->double('cost');
            $table->time('prod_estimate_time');
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
        Schema::dropIfExists('agency_adv_custom_products');
    }
}
