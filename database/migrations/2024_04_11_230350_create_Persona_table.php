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
        Schema::create('Persona', function (Blueprint $table) {
            $table->increments('persona_id');
            $table->binary('ine')->nullable();
            $table->string('nombre', 20);
            $table->string('apellido_paterno', 10);
            $table->string('apellido_materno', 10);
            $table->string('correo', 60);
            $table->string('telefono', 10)->nullable();

            $table->primary(['persona_id'], 'pk__persona__189f813a7db38234');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Persona');
    }
};
