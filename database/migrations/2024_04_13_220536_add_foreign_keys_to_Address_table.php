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
        Schema::table('Address', function (Blueprint $table) {
            $table->foreign(['city_id'], 'fk_Address_City')->references(['city_id'])->on('City')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Address', function (Blueprint $table) {
            $table->dropForeign('fk_Address_City');
        });
    }
};
