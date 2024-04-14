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
        Schema::create('Person', function (Blueprint $table) {
            $table->increments('person_id');
            $table->binary('national_id_image')->nullable();
            $table->string('first_name', 20);
            $table->string('maternal_surname', 10);
            $table->string('paternal_surname', 10);
            $table->string('mail', 60);
            $table->string('phone', 10)->nullable();

            $table->primary(['person_id'], 'pk__person__543848df7276a500');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Person');
    }
};
