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
        Schema::create('Valoracion', function (Blueprint $table) {
            $table->increments('valoracion_id');
            $table->tinyInteger('calificacion');
            $table->string('comentario', 200)->nullable();
            $table->text('imagenes_url')->nullable();
            $table->dateTime('fecha_registro')->nullable()->useCurrent();

            $table->primary(['valoracion_id'], 'pk__valoraci__bf622718f30c5d4c');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Valoracion');
    }
};
