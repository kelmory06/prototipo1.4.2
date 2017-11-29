<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
   
   protected $fillable=['fechacita','nomcliente','nuip','ubicacion', 'nomfinca','email','telefono','tipo','obsevacion'];

}