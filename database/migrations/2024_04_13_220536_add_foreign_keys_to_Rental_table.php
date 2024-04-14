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
            $table->foreign(['property_id'], 'fk_Renta_Property')->references(['property_id'])->on('Property')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['evaluation_id'], 'fk_Rental_Evaluation')->references(['evaluation_id'])->on('Evaluation')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['lessee_id'], 'fk_Rental_Login')->references(['login_id'])->on('Login')->onUpdate('no action')->onDelete('no action');
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
            $table->dropForeign('fk_Renta_Property');
            $table->dropForeign('fk_Rental_Evaluation');
            $table->dropForeign('fk_Rental_Login');
            $table->dropForeign('fk_Rental_RentalStatus');
        });
    }
};
