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
        Schema::table('City', function (Blueprint $table) {
            $table->foreign(['state_id'], 'fk_City_State')->references(['state_id'])->on('State')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('City', function (Blueprint $table) {
            $table->dropForeign('fk_City_State');
        });
    }
};
