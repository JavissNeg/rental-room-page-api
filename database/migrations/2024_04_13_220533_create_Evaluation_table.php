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
        Schema::create('Evaluation', function (Blueprint $table) {
            $table->increments('evaluation_id');
            $table->tinyInteger('rating');
            $table->string('comment', 200)->nullable();
            $table->text('image_url')->nullable();
            $table->integer('property_id')->unsigned();
            
            $table->timestamps();

            $table->primary(['evaluation_id'], 'pk__evaluati__827c592da674c77a');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Evaluation');
    }
};
