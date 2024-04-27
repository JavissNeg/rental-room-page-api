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
        Schema::create('Period', function (Blueprint $table) {
            $table->increments('period_id');
            $table->string('period', 15);
            $table->timestamps();   

            $table->primary(['period_id'], 'pk__period__2323ee4401ab3062');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Period');
    }
};
