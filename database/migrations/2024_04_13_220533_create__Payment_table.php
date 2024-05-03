<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Payment', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->string('payment_key', 50);
            $table->string('payment_type', 10);
            $table->integer('amount');
            $table->integer('property_id');
            $table->integer('lessee_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Payment');
    }
};

