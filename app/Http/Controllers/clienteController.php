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
    		$id_cliente = $_POST['id_cliente'];

            
                

    		session()->put('sesionCliente', $nombre);

    	}

    	User::create($request->all());

    	


    return back();
     }

public function cerrarSesion(){

	session()->forget('sesionCliente');
    


	


    return back();
}

}




