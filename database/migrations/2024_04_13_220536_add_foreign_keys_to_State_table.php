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
        Schema::table('State', function (Blueprint $table) {
            $table->foreign(['country_id'], 'fk_State_Country')->references(['country_id'])->on('Country')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('State', function (Blueprint $table) {
            $table->dropForeign('fk_State_Country');
        });
    }
};
