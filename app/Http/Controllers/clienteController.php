<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class clienteController extends Controller
{
    public function insert(Request $request){

    	if($_POST){

    		$nombre = $_POST['nombre'];

    		session()->put('sesionCliente', $nombre);

    	}

    	User::create($request->all());

    	$inicio = new Controller;


    return $inicio->index();
     }

public function cerrarSesion(){

	session()->forget('sesionCliente');


	$inicio = new Controller;


    return $inicio->index();
}

}




