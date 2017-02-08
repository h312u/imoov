<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagorys', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idcatagory');

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
        Schema::dropIfExists('catagorys');
    }
}
