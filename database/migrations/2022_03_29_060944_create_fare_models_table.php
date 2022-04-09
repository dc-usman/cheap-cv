<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrer_level_id')->unsigned();
            $table->integer('select_service_id')->unsigned();
            $table->integer('day_model_id')->unsigned();
            $table->double('fare',6,2);
            // $table->double('per_page_price', 6, 2);

            $table->foreign('carrer_level_id')->references('id')->on('carrer_level_models')->onDelete('cascade');
            $table->foreign('select_service_id')->references('id')->on('select_services')->onDelete('cascade');
            $table->foreign('day_model_id')->references('id')->on('day_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fare_models');
    }
}
