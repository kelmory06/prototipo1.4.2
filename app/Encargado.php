<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    //
    protected $table = 'encargados';

    protected $primaryKey ='idEncargado';

    protected $fillable = [
    	'idEncargado','nombreEncargado',
    ];

}
