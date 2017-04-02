<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valoracion;
use App\Categoria;
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
	$valoracion->imagen = $_POST['imagen'];
	$valoracion->save();

	


    return back();

}

public function eliminar($titulo){

	
	
	\DB::table('valoracion')->where([['titulo', $titulo],[ 'nombre', session()->get('sesionCliente')]])->delete();
	$inicio = new Controller;


    return $inicio->ver_todas();
}

public function cambiar($titulo){

	\DB::table('valoracion')->where([['titulo', $titulo],[ 'nombre', session()->get('sesionCliente')]])->delete();
	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$valoracionTotal = Valoracion::all();
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('titulo', '=', $titulo)->get();
	return view('cambiarCalificacion',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);

	


}


}
