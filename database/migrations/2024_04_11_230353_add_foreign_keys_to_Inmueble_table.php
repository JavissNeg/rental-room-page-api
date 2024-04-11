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
        Schema::table('Inmueble', function (Blueprint $table) {
            $table->foreign(['arrendador_id'], 'fk_Inmueble_Arrendador')->references(['login_id'])->on('Login')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['moneda_id'], 'fk_Inmueble_CodigoMoneda')->references(['moneda_id'])->on('Moneda')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['direccion_id'], 'fk_Inmueble_Direccion')->references(['direccion_id'])->on('Direccion')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['periodo_id'], 'fk_Inmueble_Periodo')->references(['periodo_id'])->on('Periodo')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_inmueble_id'], 'fk_Inmueble_TipoInmueble')->references(['tipo_inmueble_id'])->on('Tipo_Inmueble')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Inmueble', function (Blueprint $table) {
            $table->dropForeign('fk_Inmueble_Arrendador');
            $table->dropForeign('fk_Inmueble_CodigoMoneda');
            $table->dropForeign('fk_Inmueble_Direccion');
            $table->dropForeign('fk_Inmueble_Periodo');
            $table->dropForeign('fk_Inmueble_TipoInmueble');
        });
    }
};
