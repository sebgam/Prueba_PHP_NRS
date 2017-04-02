<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Categoria;
use App\Valoracion;

class Controller extends BaseController
{
	 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
public function index(){
	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$categorias = Categoria::all();
	$valoracionTotal = Valoracion::all();
	return view('welcome',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);

}

public function Destacada(){

	return view('destacadas');
}

public function comedia(){

	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Comedia')->get();
	$valoracionTotal = Valoracion::all();
	return view('comedia',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);


}

public function terror(){
	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Terror')->get();
	$valoracionTotal = Valoracion::all();
	return view('terror',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);
}

public function accion(){
	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Accion')->get();
	$valoracionTotal = Valoracion::all();
	return view('accion',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);
}

public function aventura(){
	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Aventura')->get();
	$valoracionTotal = Valoracion::all();
	return view('aventura',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);
}

public function ciencia_ficcion(){
	$valoracion = \DB::table('valoracion')->select('titulo','valoracion')->where('nombre', '=', session()->get('sesionCliente'))->get();
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Ciencia ficcion')->get();
	$valoracionTotal = Valoracion::all();
	return view('ciencia_ficcion',['categorias'=>$categorias,'valoracion'=>$valoracion,'valoracion2'=>$valoracionTotal]);
}

public function ver_todas(){

	$valoracion = \DB::table('valoracion')->select('titulo','valoracion','imagen')->where('nombre', '=', session()->get('sesionCliente'))->get();
	
	return view('ver_todas')->with('valoracion',$valoracion);
}




}
