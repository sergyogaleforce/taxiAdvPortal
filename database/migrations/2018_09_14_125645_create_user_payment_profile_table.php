<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPaymentProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payment_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('card_type');
            $table->string('card_number');
            $table->integer('card_verif_code');
            $table->string('card_name');
            $table->string('billing_address');
            $table->integer('billing_phone');
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
        Schema::dropIfExists('user_payment_profile');
    }
}
