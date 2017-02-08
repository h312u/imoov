<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idrentals');
          $table->string('rentalscol',45);
          $table->integer('vehicle_idvehicle');
          $table->integer('vehicle_catagory_idcatagory');
          $table->integer('locations_idlocations');
          $table->integer('customer_idcustomer');
          $table->integer('customer_rentals_idrentals');

          $table->dateTime('created_at');
          $table->timestamp('update_at');
          $table->timestamp('delete_at') -> useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
