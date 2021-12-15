<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rentals', function (Blueprint $table) {
            $table->id();
            $table->string('car_id');
            $table->string('arirport_id');
            $table->string('flight_id');
            $table->string('price')->nullable();
            $table->string('terms')->nullable();
            $table->string('arrive_location');
            $table->timestamp('rental_date')->nullable();
            $table->timestamp('take_back_date')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('canceled')->default(false);
            $table->string('notes')->nulable();
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
        Schema::dropIfExists('car_rentals');
    }
}
