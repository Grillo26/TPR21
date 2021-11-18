@extends('layouts.plantilla')

@section('title', 'EditCliente')
    
@section('content')
    <h1>Editar un cliente</h1>
     <form action="{{route('cliente.update', $cliente)}}" method="POST">
        @csrf
        @method('put')
         <label>
             Nombre:
             <br>
             <input type="text" name="nombre" value="{{$cliente->nombre_cliente}}">
         </label>

         <label>
             <br>
             Dirección Cliente:
             <br>
             <input type="text" name="direccion" value="{{$cliente->dirección_cliente}}">
         </label>

         <label>
             <br>
             Telefono:
             <br>
             <input type="text" name="telefono" value="{{$cliente->telefono_cliente}}">
         </label>

         <label>
             <br>
             Fecha de Nacimiento:
             <br> 
             <input type="text" name="FechaNac" placeholder="YYYY-MM-DD" value="{{$cliente->fechaNac_cliente}}">
         </label>

         <label>
             <br>
             Observaciones: 
             <br>
             <textarea name="observaciones"  cols="30" rows="5">{{$cliente->observaciones_cliente}}</textarea>
         </label>

         <br>
         <button type="submit">Actualizar</button>
     </form>
@endsection