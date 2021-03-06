<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateCarsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_cars_tables', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->integer('price');
            $table->string('color');
            $table->integer('driver_age');
            $table->boolean('automatic');
            $table->boolean('airConditioning');
            $table->float('milage');
            $table->string('description');
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
        Schema::dropIfExists('create_cars_tables');
    }
}
