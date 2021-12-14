<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingStayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_stay', function (Blueprint $table) {
            $table->id();
            $table->string('stay_id');
            $table->string('customer_id');
            $table->string('currency');
            $table->string('adults');
            $table->string('children');
            $table->string('rooms_count');
            $table->string('rooms')->nullable();  
            $table->string('price')->default(0);
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('availability')->default(false);
            $table->boolean('is_attended')->default(false);
            $table->timestamp('check_in_date');
            $table->timestamp('check_out_date');
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
        Schema::dropIfExists('booking_stay');
    }
}
