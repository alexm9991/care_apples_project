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
        Schema::create('service__type__category', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger('service_type_id');
            $table->unsignedBigInteger('service_category_id');
            $table->timestamps();

            $table->foreign('service_type_id')->references('id')->on('service__types');
            $table->foreign('service_category_id')->references('id')->on('service__categories');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service__type__category');
    }
};
