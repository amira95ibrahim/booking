<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_flights', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('flight_id');
            $table->string('currency');
            $table->string('price')->default(300);
            $table->string('seats')->default(1);
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_attended')->default(false);
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
        Schema::dropIfExists('booking_flights');
    }
}
