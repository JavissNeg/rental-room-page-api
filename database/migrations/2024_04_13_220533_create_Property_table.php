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
            $table->string('name', 100);
            $table->string('description', 800);
            $table->tinyInteger('bedrooms_number');
            $table->tinyInteger('bathrooms_number');
            $table->text('image_url');
            $table->integer('price');
            $table->boolean('isVerified')->default(false);
            $table->boolean('isAvaible')->default(true);
            $table->decimal('rating', 2, 1)->default(0.0);
            $table->integer('lessor_id');
            $table->integer('address_id');
            $table->integer('property_type_id');
            $table->integer('currency_id');
            $table->integer('period_id');
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
