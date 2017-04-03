@extends('templates.main')
@section('titulo','Comedia')
    @section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">Comedia</li>
@endsection


@section('section')

@include('templates.Peliculas')


@endsection    
