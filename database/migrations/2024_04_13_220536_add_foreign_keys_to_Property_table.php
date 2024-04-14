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
        Schema::table('Property', function (Blueprint $table) {
            $table->foreign(['address_id'], 'fk_Property_Address')->references(['address_id'])->on('Address')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['currency_id'], 'fk_Property_Currency')->references(['currency_id'])->on('Currency')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['lessor_id'], 'fk_Property_Login')->references(['login_id'])->on('Login')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['period_id'], 'fk_Property_Period')->references(['period_id'])->on('Period')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['property_type_id'], 'fk_Property_PropertyType')->references(['property_type_id'])->on('Property_Type')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Property', function (Blueprint $table) {
            $table->dropForeign('fk_Property_Address');
            $table->dropForeign('fk_Property_Currency');
            $table->dropForeign('fk_Property_Login');
            $table->dropForeign('fk_Property_Period');
            $table->dropForeign('fk_Property_PropertyType');
        });
    }
};
