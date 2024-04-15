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
        Schema::create('State', function (Blueprint $table) {
            $table->increments('state_id');
            $table->string('state', 30);
            $table->integer('country_id');
            $table->timestamps();
            
            $table->primary(['state_id'], 'pk__state__81a4741758d14cf5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('State');
    }
};
