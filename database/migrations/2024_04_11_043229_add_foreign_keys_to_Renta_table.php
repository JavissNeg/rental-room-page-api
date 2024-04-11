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
        Schema::table('Renta', function (Blueprint $table) {
            $table->foreign(['arrendador_id'], 'fk_Renta_Arrendador')->references(['login_id'])->on('Login')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['inmueble_id'], 'fk_Renta_Inmueble')->references(['inmueble_id'])->on('Inmueble')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['renta_estado_id'], 'fk_Renta_RentaEstado')->references(['renta_estado_id'])->on('Renta_Estado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['valoracion_id'], 'fk_Renta_Valoracion')->references(['valoracion_id'])->on('Valoracion')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Renta', function (Blueprint $table) {
            $table->dropForeign('fk_Renta_Arrendador');
            $table->dropForeign('fk_Renta_Inmueble');
            $table->dropForeign('fk_Renta_RentaEstado');
            $table->dropForeign('fk_Renta_Valoracion');
        });
    }
};
