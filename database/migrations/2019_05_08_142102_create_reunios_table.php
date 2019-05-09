<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReuniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titol');
            $table->string('lloc');
            $table->string('durada');
            $table->string('data_reunio');
            $table->bigInteger('entrada_id')->unsigned();
            $table->foreign('entrada_id')->references('id')->on('entradas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reunios');
    }
}
