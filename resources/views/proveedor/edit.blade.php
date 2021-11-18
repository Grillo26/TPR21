@extends('layouts.plantilla')

@section('title', 'EditarProveedor')
    
@section('content')
    <h1>Editar Proveedor</h1>

    <form action="{{route('proveedor.update', $proveedor)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre Completo: 
        <br>
        <input type="text" name="nombre" value="{{$proveedor->nombre_proveedor}}">
    </label>

    <label>
        <br>
        Dirección: 
        <br>
        <input type="text" name="direccion" value="{{$proveedor->direccion_proveedor}}">
    </label>

    <label>
        <br>
        Telefono: 
        <br>
        <input type="text" name="telefono" value="{{$proveedor->telefono_proveedor}}">
    </label>

    <label>
        <br>
        Email: 
        <br>
        <input type="text" name="email" value="{{$proveedor->email}}">
        
    </label>

    <br>
    <button type="submit">Actualizar</button>
    </form>
@endsection