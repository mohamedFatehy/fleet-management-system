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
        Schema::create('bus_seats', function (Blueprint $table) {
            $table->increments('seat_id');
            $table->unsignedSmallInteger('bus_id');
            $table->foreign('bus_id')->references('bus_id')->on('buses')->onUpdate('CASCADE');
            $table->unsignedTinyInteger('seat_index')->comment('will have numbers from 1 -> 12');
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
        Schema::dropIfExists('bus_seats');
    }
};
