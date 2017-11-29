<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCompra extends Model
{
    //
    protected $table = 'tipocompras';

    protected $primaryKey = 'idTipoCompra';

    protected $fillable = ['idTipocompra', 'nombreTipoCompra'];
}
