<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAppConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_app_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->boolean('push_notifications');
            $table->boolean('email_notifications');
            $table->boolean('text_notifications');
            $table->string('notification_types');
            $table->integer('push_sound_id');
            $table->boolean('allow_app_send_coords');
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
        Schema::dropIfExists('user_app_config');
    }
}
