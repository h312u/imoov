<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idcustomer');
            $table->string('last_name_nustomer',45);
            $table->string('first_name_customer', 45);
            $table->integer('matric_num');
            $table->string('address', 45);
            $table->integer('phone');
            $table->string('faculty', 45);
            $table->integer('driver_license_num');
            $table->integer('birthdate');

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
        Schema::dropIfExists('customers');
    }
}
