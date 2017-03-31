<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    protected $table = "valoracion";
	protected $filetable = ['titulo','valoracion','id_cliente'];
}
