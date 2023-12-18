<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('car_number')->nullable();
            $table->date('pick_up_date')->nullable();
            $table->date('drop_up_date')->nullable();
            $table->string('pick_up_time')->nullable();
            $table->string('drop_up_time')->nullable();
            $table->integer('age')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('pick_up_location')->nullable();
            $table->string('promoCode')->nullable();
            $table->bigInteger('rent_price');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('payment_type')->nullable();
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
        Schema::dropIfExists('booking');
    }
}
