<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverVerifPicAnalysisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_verif_pic_analysis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('verification_pic_id');
            $table->string('file_name');
            $table->string('file_ext');
            $table->binary('analysis_file');
            $table->double('size');
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
        Schema::dropIfExists('driver_verif_pic_analysis');
    }
}
