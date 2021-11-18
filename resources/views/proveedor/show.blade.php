@extends('layouts.plantilla')

@section('title', 'Proveedor '.$proveedor->nombre_proveedor)
   
@section('content')
    <h1>{{$proveedor->nombre_proveedor}}</h1>
    <a href="{{route('proveedor.index')}}">Volver</a>
    <br>
    <a href="{{route('proveedor.edit', $proveedor)}}">Editar Proveedor</a>
    <p><strong>Dirección: </strong>{{$proveedor->dirección_proveedor}}</p>
    <p><strong>Teléfono: </strong>{{$proveedor->telefono_proveedor}}</p>
    <p><strong>Correo: </strong>{{$proveedor->email}}</p>

@endsection