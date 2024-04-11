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
        Schema::create('Inmueble', function (Blueprint $table) {
            $table->increments('inmueble_id');
            $table->string('descripcion', 800);
            $table->tinyInteger('numero_habitaciones');
            $table->tinyInteger('numero_baños');
            $table->text('imagenes_url');
            $table->decimal('precio', 15);
            $table->boolean('disponible')->default(true);
            $table->dateTime('fecha_registro')->useCurrent();
            $table->integer('encargado_id');
            $table->integer('direccion_id');
            $table->string('tipo_inmueble_id', 30);
            $table->string('moneda_id', 10);

            $table->primary(['inmueble_id'], 'pk__inmueble__e51af66705ea7dd4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Inmueble');
    }
};
