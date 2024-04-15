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
        Schema::create('Property_Type', function (Blueprint $table) {
            $table->increments('property_type_id');
            $table->string('property_type', 30);
            $table->string('description', 200);
            $table->timestamps();

            $table->primary(['property_type_id'], 'pk__property__2e6fbfabd2287382');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Property_Type');
    }
};
