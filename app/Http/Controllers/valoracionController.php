<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valoracion;
use App\Http\Controllers\Controller;

class valoracionController extends Controller
{

public function calificar(Request $request){

	

	$valoracion = new Valoracion;

	$num = $_POST['valoracion'];;
	$int = (int)$num;
	

	$valoracion->nombre = session()->get('sesionCliente');
	$valoracion->valoracion = $int;
	$valoracion->titulo = $_POST['titulo'];
	$valoracion->save();

	$inicio = new Controller;


    return $inicio->index();

}

public function tuCalificacion(){

	$valoracion = \DB::table('valoracion')->select('valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();

}


}
