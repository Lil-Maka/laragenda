<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumInteger('numero');
            $table->string('tipus');
            $table->string('dispositiu');
            $table->string('lloc_trucada');
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
        Schema::dropIfExists('trucadas');
    }
}
