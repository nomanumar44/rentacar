<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('brand')->nullable();
            $table->integer('number_of_seats')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('location_store')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
