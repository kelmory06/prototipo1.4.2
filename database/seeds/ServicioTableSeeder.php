<?php

use Illuminate\Database\Seeder;

class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servicios')->insert([
        	'idServicio' => '1',
        	'nombreServicio' => 'Montaje de Equipo',
        ]);
        DB::table('servicios')->insert([
        	'idServicio' => '2',
        	'nombreServicio' => 'Reparacion',
        ]);
        DB::table('servicios')->insert([
        	'idServicio' => '3',
        	'nombreServicio' => 'Mantenimiento',
        ]);
    }
}
