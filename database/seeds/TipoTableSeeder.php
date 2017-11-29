<?php

use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipoCompras')->insert([
        	'idTipoCompra' => '1',
        	'nombreTipoCompra' => 'Compras a Distribuidores',
        ]);
        DB::table('tipoCompras')->insert([
        	'idTipoCompra' => '2',
        	'nombreTipoCompra' => 'Viaticos',
        ]);
        DB::table('tipoCompras')->insert([
        	'idTipoCompra' => '3',
        	'nombreTipoCompra' => 'Materiales y Suministros',
        ]);
        DB::table('tipoCompras')->insert([
        	'idTipoCompra' => '4',
        	'nombreTipoCompra' => 'Gastos Administrativos',
        ]);
    }
}
