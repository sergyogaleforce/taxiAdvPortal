<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverVerificationPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_verification_picture', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_id');
            $table->string('file_name');
            $table->string('file_ext');
            $table->binary('file');
            $table->double('size');
            $table->integer('verification_schedule_id');
            $table->text('description');
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
        Schema::dropIfExists('driver_verification_picture');
    }
}
