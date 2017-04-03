
@extends('templates.main')
@section('titulo','Ver todas ')
    
@section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">ver Todas</li>
@endsection 

@section('section')

@include('templates.PeliculasCalificadas')


@endsection    
