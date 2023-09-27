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
        Schema::create('services_establishments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('establishments_id');
            $table->timestamps();

            $table->foreign('services_id')->references('id')->on('services');
            $table->foreign('establishments_id')->references('id')->on('establishments');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_establishments');
    }
};
