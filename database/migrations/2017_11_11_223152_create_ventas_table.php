<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->string('idServicio');
            $table->string('nombreServicio');
            $table->timestamps();

            $table->primary('idServicio');
        });

        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('servicio');
            $table->string('concepto');
            $table->integer('valor');
            $table->timestamps();

            $table->foreign('servicio')->references('idServicio')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
