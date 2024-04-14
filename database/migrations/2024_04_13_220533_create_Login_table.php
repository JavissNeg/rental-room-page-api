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
            $table->string('username', 10);
            $table->string('password', 20);
            $table->boolean('isVerified')->default(false);
            $table->boolean('isCertificate')->default(false);
            $table->integer('person_id');

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
