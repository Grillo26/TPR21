@extends('layouts.plantilla')

@section('title', 'PersonalCreate')
    
@section('content')
    <h1>Aquí crearas Personal</h1>

    <form action="{{route('personal.store')}}" method="POST">
    @csrf

    <label>
        Nombre: 
        <br>
        <input type="text" name="nombre">
    </label>

    <label>
        <br>
        Telefono: 
        <br>
        <input type="text" name="telefono">
    </label>
    
    <label>
        <br>
        Dirección: 
        <br>
        <input type="text" name="direccion">
    </label>

    <label>
        <br>
        Tipo De Personal: 
        <br>
        <select name="tipo">
            <option value="1">Administrador</option>
            <option value="2" selected>Mesero</option>
            <option value="3">Ayudante de Cocina</option>
            <option value="4">Cajero</option>
        </select>
    </label>

    <label>
        <br>
        Turno de Trabajo: 
        <br>
        <select name="turno">
            <option value="1" selected>Mañana</option>
            <option value="2">Tarde</option>
            <option value="3">Noche</option>
        </select>
    </label>

    <br>
    <button type="submit">Registrar</button>

    </form>
@endsection