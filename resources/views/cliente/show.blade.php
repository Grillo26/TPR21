@extends('layouts.plantilla')

@section('title', 'Cliente '.$cliente->nombre_cliente)
    
@section('content')
    <h1>{{$cliente->nombre_cliente}}</h1>
    <a href="{{route('cliente.index')}}">Volver</a>
    <br>
    <a href="{{route('cliente.edit', $cliente)}}">Editar Cliente</a>
    <p><strong>Dirección: </strong>{{$cliente->dirección_cliente}}</p>
    <p><strong>Telefono: </strong>{{$cliente->telefono_cliente}}</p>
    <p><strong>Fecha de Nacimiento: </strong>{{$cliente->fechaNac_cliente}}</p>
    <p><strong>Observaciones: </strong>{{$cliente->observaciones_cliente}}</p>


@endsection