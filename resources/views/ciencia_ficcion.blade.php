@extends('templates.main')
@section('titulo','Ciencia ficcion')
    
@section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">Ciencia ficción</li>
@endsection

@section('section')


@include('templates.Peliculas')

@endsection    
