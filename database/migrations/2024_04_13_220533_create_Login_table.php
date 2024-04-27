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
            $table->binary('national_id_image')->nullable();
            $table->string('first_name', 20);
            $table->string('paternal_surname', 10);
            $table->string('maternal_surname', 10);
            $table->string('mail', 50);
            $table->string('phone', 10)->nullable();
            $table->string('password', 20);
            $table->boolean('isVerified')->default(false);
            $table->boolean('isCertified')->default(false);
            $table->integer('address_id')->nullable();
            $table->timestamps();

            $table->primary(['login_id'], 'pk__login__c2c971db4b1e77fe');
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
