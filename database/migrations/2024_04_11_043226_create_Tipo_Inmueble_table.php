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
        Schema::create('Tipo_Inmueble', function (Blueprint $table) {
            $table->string('tipo_inmueble_id', 30);

            $table->primary(['tipo_inmueble_id'], 'pk__tipo_inm__721b1671c57e0203');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tipo_Inmueble');
    }
};
