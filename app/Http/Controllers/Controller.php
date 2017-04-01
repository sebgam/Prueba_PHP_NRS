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
	$contador =1;
	return view('welcome')->with('categorias',$categorias);

}

public function Destacada(){

	return view('destacadas');
}

public function comedia(){

	return view('comedia');
}

public function terror(){

	return view('terror');
}

public function accion(){

	return view('accion');
}

public function aventura(){

	return view('aventura');
}

public function ciencia_ficcion(){

	return view('ciencia_ficcion');
}

public function ver_todas(){

	return view('ver_todas');
}




}
