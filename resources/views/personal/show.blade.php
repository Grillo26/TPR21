@extends('layouts.plantilla')

@section('title', 'Persona '.$personal->nombre_personal)
    
@section('content')
    <h1>{{$personal->nombre_personal}}</h1>
    <a href="{{route('personal.index')}}">Volver</a>
    <p><strong>Telefono: </strong>{{$personal->telefono_personal}}</p>
    <p><strong>Dirección: </strong>{{$personal->direccion_personal}}</p>
    <p><strong>Ocupación: </strong>{{$personal->id_tipo}}</p>
    <p><strong>Turno: </strong>{{$personal->id_turno}}</p>

@endsection