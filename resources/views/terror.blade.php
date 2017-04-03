@extends('templates.main')
@section('titulo','Terror')
    
@section('migas')
<li><a href="{{url('/')}}">inicio</a></li>
<li class="active">Terror</li>
@endsection

@section('section')

@include('templates.Peliculas')


@endsection    
