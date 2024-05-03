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
        Schema::table('Evaluation', function (Blueprint $table) {
            $table->foreign(['property_id'], 'fk_Evaluation_Property')->references(['property_id'])->on('Property')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Evaluation', function (Blueprint $table) {
            $table->dropForeign('fk_Evaluation_Property');
        });
    }
};
