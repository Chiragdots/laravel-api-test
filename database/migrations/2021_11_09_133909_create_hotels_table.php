<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hotel_name',45);
            $table->enum('supplier', ['Admin', 'Hotelbeds','SunHotels']);
            $table->enum('status', ['Active', 'Inactive']);
            $table->text('hotel_address');
            $table->timestamps();

            // add for index
            $table->index('id');
            $table->index('status');
            $table->index('hotel_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
