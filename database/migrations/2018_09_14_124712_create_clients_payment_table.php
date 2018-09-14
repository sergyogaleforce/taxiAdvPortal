<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->double('gross');
            $table->double('taxes');
            $table->double('commission');
            $table->integer('payment_profile_id');
            $table->string('status');
            $table->string('description');
            $table->integer('match_id');
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
        Schema::dropIfExists('clients_payment');
    }
}
