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
        Schema::table('Direccion', function (Blueprint $table) {
            $table->foreign(['ciudad_id'], 'fk_Direccion_Ciudad')->references(['ciudad_id'])->on('Ciudad')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Direccion', function (Blueprint $table) {
            $table->dropForeign('fk_Direccion_Ciudad');
        });
    }
};
