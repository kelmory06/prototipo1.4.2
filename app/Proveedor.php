<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedors';

    protected $primaryKey = 'nit';

    protected $fillable = ['nit','razonSocial','telefono','e_mail','direccion',];
}
