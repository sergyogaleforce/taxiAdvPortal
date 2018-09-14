<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_agency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name');
            $table->string('agency_description');
            $table->string('mobile_device');
            $table->string('mobil');
            $table->string('phone');
            $table->string('fax');
            $table->boolean('status');
            $table->string('address');
            $table->string('agency_logo_id');
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
        Schema::dropIfExists('production_agency');
    }
}
