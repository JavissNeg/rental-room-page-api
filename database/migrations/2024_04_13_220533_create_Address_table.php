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
        Schema::create('Address', function (Blueprint $table) {
            $table->increments('address_id');
            $table->string('street', 30);
            $table->string('district', 30);
            $table->integer('zip_code');
            $table->integer('street_number');
            $table->integer('apartment_number')->nullable();
            $table->integer('city_id');
            
            $table->primary(['address_id'], 'pk__address__caa247c85ea97ab8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Address');
    }
};
