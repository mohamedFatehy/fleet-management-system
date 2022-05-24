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
        Schema::create('trip_cross_overs', function (Blueprint $table) {
            $table->unsignedInteger('trip_id');
            $table->foreign('trip_id')->references('trip_id')->on('trips')->onUpdate('CASCADE');
            $table->unsignedSmallInteger('city_id');
            $table->foreign('city_id')->references('city_id')->on('cities')->onUpdate('CASCADE');
            $table->unsignedTinyInteger('order')->default(1);
            $table->primary(['city_id', 'trip_id']);
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
        Schema::dropIfExists('trip_cross_overs');
    }
};
