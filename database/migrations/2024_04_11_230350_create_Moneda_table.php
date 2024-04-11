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
        Schema::create('Moneda', function (Blueprint $table) {
            $table->string('moneda_id', 10);
            $table->string('simbolo', 1);
            $table->decimal('tasa_cambio', 4);

            $table->primary(['moneda_id'], 'pk__moneda__8c95cf9dca135843');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Moneda');
    }
};
