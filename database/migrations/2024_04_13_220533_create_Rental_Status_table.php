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
            $table->string('rental_status_id', 15);
            $table->string('description', 30);
            $table->timestamps();
            
            $table->primary('rental_status_id', 'pk__rental_s__5698bfd9746651b3');
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
