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
        Schema::create('Direccion', function (Blueprint $table) {
            $table->increments('direccion_id');
            $table->string('calle', 30);
            $table->string('colonia', 30);
            $table->integer('codigo_postal');
            $table->integer('numero_exterior');
            $table->integer('numero_interior')->nullable();
            $table->integer('ciudad_id');

            $table->primary(['direccion_id'], 'pk__direccio__3ce1758c6c3e808b');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Direccion');
    }
};
