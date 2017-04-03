@extends('templates.main')
@section('titulo','Cambiar calificacion')
    
@section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">Cambiar calificacion</li>
@endsection

@section('section')

@include('templates.actualizar')


@endsection    
