@extends('templates.main')
@section('titulo','Accion')
    
@section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">Accion</li>
@endsection


@section('section')


@include('templates.Peliculas')

@endsection    
