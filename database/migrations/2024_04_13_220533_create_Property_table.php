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
        Schema::create('Property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->string('description', 800);
            $table->tinyInteger('bedrooms_number');
            $table->tinyInteger('bathrooms_number');
            $table->text('image_url');
            $table->decimal('price', 15);
            $table->boolean('verified')->default(false);
            $table->boolean('avaible')->default(true);
            $table->tinyInteger('rating')->default(0);
            $table->integer('lessor_id');
            $table->integer('address_id');
            $table->string('property_type_id', 30);
            $table->string('currency_id', 10);
            $table->string('period_id', 5);
            $table->timestamps();

            $table->primary(['property_id'], 'pk__property__735ba46319f53f41');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Property');
    }
};
