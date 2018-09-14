<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverWorkScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_work_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_id');
            $table->time('from');
            $table->time('to');
            $table->boolean('M');
            $table->boolean('T');
            $table->boolean('W');
            $table->boolean('R');
            $table->boolean('F');
            $table->boolean('S');
            $table->boolean('U');
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
        Schema::dropIfExists('driver_work_schedule');
    }
}
