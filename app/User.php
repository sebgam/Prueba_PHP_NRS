<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $filetable = ['id_cliente','nombre','apellido'];
    protected $fillable = ['id_cliente','nombre','apellido'];

}