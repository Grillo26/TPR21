@extends('layouts.plantilla')

@section('title', 'EditarPersonal')
    
@section('content')
    <h1>Editar Personal</h1>

    <form action="{{route('personal.update', $personal)}}" method="POST">
    @csrf
    @method('put')

    <label>
        Nombre: 
        <br>
        <input type="text" name="nombre" value="{{old('nombre', $personal->nombre_personal)}}">
    </label>
    @error('nombre')
        <br>
        <small> *{{$message}}</small> 
    @enderror

    <label>
        <br>
        Telefono: 
        <br>
        <input type="text" name="telefono" value="{{old('telefono', $personal->telefono_personal)}}">
    </label>
    @error('telefono')
        <br>
        <small> *{{$message}}</small> 
    @enderror
    
    <label>
        <br>
        Dirección: 
        <br>
        <input type="text" name="direccion" value="{{old('direccion', $personal->direccion_personal)}}">
    </label>
    @error('direccion')
        <br>
        <small> *{{$message}}</small> 
    @enderror

    <label>
        <br>
        Tipo De Personal: 
        <br>
        <select name="tipo">
            <option value="1">Administrador</option>
            <option value="2">Mesero</option>
            <option value="3">Ayudante de Cocina</option>
            <option value="4">Cajero</option>
        </select>
    </label>
    @error('tipo')
        <br>
        <small> *{{$message}}</small> 
    @enderror

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
    @error('turno')
        <br>
        <small> *{{$message}}</small> 
    @enderror

    <br><br>
    <button type="submit">Actualizar</button>

    </form>
@endsection