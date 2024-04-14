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
        Schema::create('Rental_Status', function (Blueprint $table) {
            $table->increments('rental_status_id');
            $table->string('rental_status', 15);
            $table->timestamps();
            
            $table->primary(['rental_status_id'], 'pk__rental_s__5698bfd9746651b3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rental_Status');
    }
};
