<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateVendorsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_vendors_tables', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->unique();

            //vendor Info
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('sex')->default('male');
            $table->date('brithday')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('business');
            //Locations Info
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();

            //Login Info
            $table->boolean('login')->default(true);
            $table->timestamp('last_login_at ')->nullable();
            $table->boolean('activated')->default(false);
            $table->boolean('blocked')->default(false);
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();


            //Accounting

            $table->double('in')->define(0);
            $table->double('out')->define(0);
            $table->double('wallet')->define(0);
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
        Schema::dropIfExists('create_vendors_tables');
    }
}
