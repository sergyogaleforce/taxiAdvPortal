<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverPicAnalysisIncidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_pic_analysis_incidence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drv_pic_analysis_id');
            $table->double('diff_percent');
            $table->string('description');
            $table->double('x_pos');
            $table->double('y_pos');
            $table->double('radio');
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
        Schema::dropIfExists('driver_pic_analysis_incidence');
    }
}
