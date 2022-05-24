<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('trip_id');
            $table->string('title');
            $table->unsignedSmallInteger('bus_id');
            $table->foreign('bus_id')->references('bus_id')->on('buses')->onUpdate('CASCADE');
            $table->float('price')->default(0);
            $table->timestamp('start_date')->useCurrent();
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
        Schema::dropIfExists('trips');
    }
};
