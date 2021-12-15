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
            $table->string('name');
            $table->string('vendor_id');
            $table->string('car_type')->nullable();
            $table->string('driver_name');
            $table->string('phone');
            $table->string('properties')->nullable();
            $table->string('mileage')->nullable();
            $table->string('car_brand')->nullable();
            $table->string('fuel_policy')->default('like to like');
            $table->string('rental_price')->default('500');
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
