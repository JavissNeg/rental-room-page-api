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
        Schema::table('Login', function (Blueprint $table) {
            $table->foreign(['address_id'], 'fk_Login_Address')->references(['address_id'])->on('Address')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Login', function (Blueprint $table) {
            $table->dropForeign('fk_Login_Address');
        });
    }
};
