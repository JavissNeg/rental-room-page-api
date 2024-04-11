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
        Schema::table('Ciudad', function (Blueprint $table) {
            $table->foreign(['pais_id'], 'fk_Ciudad_Pais')->references(['pais_id'])->on('Pais')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Ciudad', function (Blueprint $table) {
            $table->dropForeign('fk_Ciudad_Pais');
        });
    }
};
