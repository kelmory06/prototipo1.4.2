<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoCompras', function (Blueprint $table) {
            $table->integer('idTipoCompra');
            $table->string('nombreTipoCompra');
            $table->timestamps();

            $table->primary('idTipoCompra');
        });

        Schema::create('compras', function (Blueprint $table) {
            $table->integer('idCompra');
            $table->integer('idCliente')->nullable();
            $table->integer('tipoCompra');
            $table->integer('nitProveedor');
            $table->date('fechaCompra');
            $table->string('concepto')->nullable();
            $table->double('valorCompra');//sin iva
            $table->double('valorTotalCompra');//con iva
            $table->timestamps();

            $table->primary('idCompra');
            $table->foreign('nitProveedor')->references('nit')->on('proveedors');
            $table->foreign('idCliente')->references('numeroId')->on('clientes');
            $table->foreign('tipoCompra')->references('idTipoCompra')->on('tipoCompras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
