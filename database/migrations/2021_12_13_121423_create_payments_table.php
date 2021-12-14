<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
              //Refs
              $table->unsignedBigInteger('customer_id');
              $table->unsignedBigInteger('order_id');
              $table->unsignedBigInteger('user_id')->nullable();
  
              //Payment Info
              $table->string('type')->default('in');
              $table->string('payment_method')->default('cash');
              $table->double('amount')->default(0);
              $table->string('description')->nullable();
  
              //Online Ids
              $table->string('vendor')->nullable();
              $table->string('vendor_id')->nullable();
  
              //Notes Of Users
              $table->text('notes')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
