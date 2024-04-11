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
        Schema::create('Login', function (Blueprint $table) {
            $table->increments('login_id');
            $table->string('usuario', 10);
            $table->string('contraseña', 20);
            $table->boolean('verificado')->default(false);
            $table->boolean('certificado')->default(false);
            $table->integer('persona_id');

            $table->primary(['login_id'], 'pk__login__c2c971db6246a2a5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Login');
    }
};
