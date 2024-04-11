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
        Schema::create('Renta', function (Blueprint $table) {
            $table->increments('renta_id');
            $table->decimal('total', 15);
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->dateTime('fecha_registro')->nullable()->useCurrent();
            $table->integer('renta_estado_id');
            $table->integer('inmueble_id');
            $table->integer('arrendador_id');
            $table->integer('valoracion_id');

            $table->primary(['renta_id'], 'pk__renta__1c43f424d9a8787f');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Renta');
    }
};
