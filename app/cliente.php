<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $table = 'clientes';

    protected $primaryKey = 'numeroId';

    protected $fillable = [
    	'numeroId', 'nombre', 'telefono','finca', 'ubicacion', 'e_mail', 'idEncargado', 'nombreEncargado', 'telefonoEncargado',
    ];

    /*
    public function nomEncargado()
    {
    	return $this->hasOne('App\Encargado', 'idEncargado', 'idEncargado');
    }
    */

    public function scopeBusqueda($query,$dato="")
     {
        $resultado= $query->where('nombre','like','%'.$dato.'%')
        ->orWhere('numeroId','like', '%'.$dato.'%');                   
        return  $resultado;
     }
}
