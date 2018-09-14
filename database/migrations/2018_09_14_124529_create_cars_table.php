<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('driver_id');
            $table->string('brand');
            $table->string('model');
            $table->integer('miles');
            $table->string('color');
            $table->string('insurance_id')->nullable();
            $table->boolean('crashes');
            $table->string('crashes_description')->nullable();
            $table->string('owner_type'); //lease own or rent
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
        Schema::dropIfExists('cars');
    }
}
