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
        Schema::table('Person', function (Blueprint $table) {
            $table->foreign(['address_id'], 'fk_Person_Address')->references(['address_id'])->on('Address')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Person', function (Blueprint $table) {
            $table->dropForeign('fk_Person_Address');
        });
    }
};
