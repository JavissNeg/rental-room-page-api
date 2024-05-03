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
        Schema::table('Payment', function (Blueprint $table) {
            $table->foreign(['property_id'], 'fk_Payment_Property')->references(['property_id'])->on('Property')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['lessee_id'], 'fk_Payment_Login')->references(['login_id'])->on('Login')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Payment', function (Blueprint $table) {
            $table->dropForeign('fk_Payment_Property');
            $table->dropForeign('fk_Payment_Login');
        });
    }
};
