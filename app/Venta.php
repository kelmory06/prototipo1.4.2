<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table = 'ventas';
    protected $fillable = ['servicio', 'concepto', 'valor'];

    public function nomServicio()
    {
    	return $this->hasOne('App\Servicio', 'idServicio', 'servicio');
    }
}
