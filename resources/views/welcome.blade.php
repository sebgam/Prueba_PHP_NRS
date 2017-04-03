
@extends('templates.main')
@section('titulo','Inicio ')
    
@section('migas')

<li class="active">Inicio</li>
@endsection


@section('section')

@include('templates.Peliculas')


{!! $categorias->render()!!}

@endsection    

