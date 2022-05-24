<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('reservation_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE');
            $table->unsignedInteger('trip_id');
            $table->foreign('trip_id')->references('trip_id')->on('trips')->onUpdate('CASCADE');
            $table->unsignedInteger('seat_id');
            $table->foreign('seat_id')->references('seat_id')->on('bus_seats')->onUpdate('CASCADE');
            $table->float('price');
            $table->enum('status', ['confirmed', 'canceled'])->default('confirmed');
            $table->unsignedSmallInteger('from_city');
            $table->foreign('from_city')->references('city_id')->on('cities')->onUpdate('CASCADE');
            $table->unsignedSmallInteger('to_city');
            $table->foreign('to_city')->references('city_id')->on('cities')->onUpdate('CASCADE');
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
        Schema::dropIfExists('reservations');
    }
};
