<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Categoria;

class Controller extends BaseController
{
    
public function index(){

	$categorias = Categoria::all();
	return view('welcome')->with('categorias',$categorias);

}

public function Destacada(){

	return view('destacadas');
}

public function comedia(){

	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Comedia')->get();
	return view('comedia')->with('categorias',$categorias);

}

public function terror(){
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Terror')->get();
	return view('terror')->with('categorias',$categorias);
}

public function accion(){
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Accion')->get();
	return view('accion')->with('categorias',$categorias);
}

public function aventura(){
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Aventura')->get();
	return view('aventura')->with('categorias',$categorias);
}

public function ciencia_ficcion(){
	$categorias = \DB::table('categorias')->select('titulo', 'categoria','imagen')->where('categoria', '=', 'Ciencia ficcion')->get();
	return view('ciencia_ficcion')->with('categorias',$categorias);
}

public function ver_todas(){

	return view('ver_todas');
}




}
