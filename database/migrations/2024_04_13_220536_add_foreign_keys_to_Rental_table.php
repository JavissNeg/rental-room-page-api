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
        Schema::table('Rental', function (Blueprint $table) {
            $table->foreign(['payment_id'], 'fk_Rental_Payment')->references(['payment_id'])->on('Payment')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['rental_status_id'], 'fk_Rental_RentalStatus')->references(['rental_status_id'])->on('Rental_Status')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Rental', function (Blueprint $table) {
            $table->dropForeign('fk_Rental_Payment');
            $table->dropForeign('fk_Rental_RentalStatus');
        });
    }
};