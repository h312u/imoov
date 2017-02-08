<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationfetchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservationsfetchs', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idreservationfetch');
          $table->string('pickup_locationfetch', 45);
          $table->dateTime('pickup_date_timefetch');
          $table->integer('catagory_idcatagory');
          $table->integer('locations_idlocations');
          $table->integer('customer_idcustomer');

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
        Schema::dropIfExists('reservationsfetchs');
    }
}
