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
        Schema::create('Currency', function (Blueprint $table) {
            $table->string('currency_id', 10);
            $table->string('symbol', 1);
            $table->decimal('exchange_rate', 4);
            $table->timestamps();

            $table->primary(['currency_id'], 'pk__currency__c7f543d3d6bfc4f0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Currency');
    }
};
