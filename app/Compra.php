<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    protected $table = 'compras';

    protected $primaryKey = 'idCompra';

    protected $fillable = ['idCompra', 'idCliente', 'tipoCompra', 'nitProveedor', 'fechaCompra', 'concepto', 'valorCompra', 'valorTotalCompra'];

    public function nomTipoCompra()
    {
    	return $this->hasOne('App\TipoCompra', 'idTipoCompra', 'tipoCompra');
    }
    public function nomProveedor()
    {
    	return$this->hasOne('App\Proveedor', 'nit', 'nitProveedor');
    }
    public function nomCliente()
    {
        return $this->hasMany('App\cliente', 'numeroId', 'idCliente');
    }

    public function scopeBusqueda($query,$tipo)
    {
        if($tipo != 0){
            $resultado = $query->where('tipoCompra', "=", $tipo);
        }
        return $resultado;
    }
}
