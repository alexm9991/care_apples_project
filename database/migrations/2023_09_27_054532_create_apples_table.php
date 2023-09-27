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
        Schema::create('apples', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->unsignedSmallInteger('code');
            $table->string('name',30);
            $table->string('location',30);
            $table->string('address',55);
            $table->double('latitude');
            $table->double('length');
            $table->unsignedBigInteger('municipalities_id');
            $table->foreign('municipalities_id')->references('id')->on('municipalities');
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
        Schema::dropIfExists('apples');
    }
};
