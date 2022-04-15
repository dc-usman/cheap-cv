<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdercvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('carrer_level');
            $table->string('select_service');
            $table->string('deadline_id');
            $table->string('carrer_level_name');
            $table->string('select_service_name');
            $table->string('deadline_name');
            $table->double('total_price',4,1);
            $table->mediumText('detail');
            $table->boolean('is_complete')->default(false);
            $table->timestamps();

            $table->foreign('carrer_level_name')->references('name')->on('carrer_level_models')->onDelete('cascade');
            $table->foreign('select_service_name')->references('name')->on('select_services')->onDelete('cascade');
            $table->foreign('deadline_name')->references('name')->on('day_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordercvs');
    }
}
