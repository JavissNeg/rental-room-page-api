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
        Schema::create('Rental', function (Blueprint $table) {
            $table->increments('rental_id');
            $table->decimal('total', 15);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('rental_status_id', 15);
            $table->integer('property_id');
            $table->integer('lessee_id');
            $table->integer('evaluation_id');
            $table->timestamps();
            
            $table->primary(['rental_id'], 'pk__rental__67db611bb1838534');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rental');
    }
};
