<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parteSistemas', function (Blueprint $table) {
            $table->string('idParte', 5);
            $table->primary('idParte');
            $table->string('nombreParte', 15);
            $table->timestamps();
        });

        Schema::create('sistemas', function (Blueprint $table) {
            $table->string('idSistema', 5);
            $table->primary('idSistema');
            $table->string('nombreSistema', 15);
            $table->timestamps();
        });

        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idSistemas');
            $table->string('idPartes');
            $table->date('fecha');
            $table->string('observaciones');
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
        Schema::dropIfExists('mantenimientos');
    }
}
