<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('system_name');
            $table->string('description');
            $table->string('address');
            $table->string('phones');
            $table->string('faxes');
            $table->string('description');
            $table->double('commission_percent');
            $table->string('status');
            $table->string('offline_message');
            $table->boolean('email_notifications');
            $table->boolean('push_notifications');
            $table->boolean('text_notifications');
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
        Schema::dropIfExists('system_config');
    }
}
