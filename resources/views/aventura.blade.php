@extends('templates.main')
@section('titulo','Aventura')
    
@section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">Aventura</li>
@endsection


@section('section')


@include('templates.Peliculas')

@endsection    
