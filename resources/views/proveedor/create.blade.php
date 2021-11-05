@extends('layouts.plantilla')

@section('title', 'CrearProveedor')
    
@section('content')
    <h1>Aquí crearas Proveedor</h1>

    <form action="{{route('proveedor.store')}}" method="POST">
    @csrf
    <label>
        Nombre Completo: 
        <br>
        <input type="text" name="nombre">
    </label>

    <label>
        <br>
        Dirección: 
        <br>
        <input type="text" name="direccion">
    </label>

    <label>
        <br>
        Telefono: 
        <br>
        <input type="text" name="telefono">
    </label>

    <label>
        <br>
        Email: 
        <br>
        <input type="text" name="email">
        
    </label>

    <br>
    <button type="submit">Registrar</button>
    </form>
@endsection