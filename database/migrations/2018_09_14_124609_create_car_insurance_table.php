<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_insurance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->string('company');
            $table->date('from');
            $table->date('to');
            $table->string('police_number');
            $table->string('insurance_type');
            $table->string('coverage');
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
        Schema::dropIfExists('car_insurance');
    }
}
