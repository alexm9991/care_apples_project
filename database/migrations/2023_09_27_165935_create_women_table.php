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
        Schema::create('women', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identification_type_id');
            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('users_id');
            $table->string('identification_number');
            $table->string('name',25);
            $table->string('last_name',30);
            $table->string('phone_number',11);
            $table->string('city',45);
            $table->string('address',55);
            $table->string('occupation',45);
       

            // Definir claves foráneas
            $table->foreign('identification_type_id')->references('id')->on('identification_types');
            $table->foreign('services_id')->references('id')->on('services');
            $table->foreign('users_id')->references('id')->on('users');
        
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
        Schema::dropIfExists('women');
    }
};
