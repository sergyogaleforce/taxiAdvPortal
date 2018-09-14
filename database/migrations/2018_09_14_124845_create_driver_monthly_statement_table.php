<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverMonthlyStatementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_monthly_statement', function (Blueprint $table) {
            $table->increments('id');
            $table->date('from_period');
            $table->date('to_period');
            $table->string('period_name');
            $table->double('earnings');
            $table->integer('total_advertisers');
            $table->integer('payments');
            $table->integer('success_verifications');
            $table->integer('verification_incidences');
            $table->integer('total_clients');
            $table->integer('total_miles');
            $table->double('avg_reviews');
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
        Schema::dropIfExists('driver_monthly_statement');
    }
}
