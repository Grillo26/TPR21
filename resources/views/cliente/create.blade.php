@extends('layouts.plantilla')

@section('title', 'CrearCliente')
    
@section('content')
    <h1>Aquí crearas Cliente</h1>
     <form action="{{route('cliente.store')}}" method="POST">
        @csrf

         <label>
             Nombre:
             <br>
             <input type="text" name="nombre">
         </label>

         <label>
             <br>
             Dirección Cliente:
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
             Fecha de Nacimiento:
             <br> 
             <input type="text" name="FechaNac" placeholder="YYYY-MM-DD">
         </label>

         <label>
             <br>
             Observaciones: 
             <br>
             <textarea name="observaciones"  cols="30" rows="5"></textarea>
         </label>

         <br>
         <button type="submit">Guardar</button>
     </form>
@endsection