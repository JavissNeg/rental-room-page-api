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
        Schema::create('Renta_Estado', function (Blueprint $table) {
            $table->increments('renta_estado_id');
            $table->string('renta_estado', 15);
            $table->dateTime('fecha_registro')->nullable()->useCurrent();

            $table->primary(['renta_estado_id'], 'pk__renta_es__fa2601024cf47852');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Renta_Estado');
    }
};
