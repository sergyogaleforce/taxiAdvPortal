<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchProductDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_product_design', function (Blueprint $table) {
            $table->increments('id');
            $table->string('match_adv_product_id');
            $table->integer('version_no');
            $table->string('file_name');
            $table->string('file_ext');
            $table->binary('design_file');
            $table->string('description');
            $table->boolean('final');
            $table->string('status');
            $table->double('size');
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
        Schema::dropIfExists('match_product_design');
    }
}
