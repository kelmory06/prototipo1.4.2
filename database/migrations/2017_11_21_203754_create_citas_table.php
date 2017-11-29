<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechacita')->unique();
            $table->string('nomcliente');
            $table->string('nuip')->unique();  
            $table->string('ubicacion'); 
            $table->string('nomfinca'); 
            $table->string('email')->unique();
            $table->string('telefono');  
            $table->string('tipo');
            $table->text('observacion');
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
        Schema::dropIfExists('citas');
    }
}
