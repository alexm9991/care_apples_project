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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('horary');
            $table->unsignedBigInteger('women_id');
            $table->unsignedBigInteger('apples_id');
            $table->unsignedBigInteger('status_bookings_id');

       
 // Definir claves foráneas
 $table->foreign('women_id')->references('id')->on('women');
 $table->foreign('apples_id')->references('id')->on('apples');
 $table->foreign('status_bookings_id')->references('id')->on('status_bookings');

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
        Schema::dropIfExists('bookings');
    }
};
