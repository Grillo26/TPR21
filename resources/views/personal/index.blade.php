@extends('layouts.plantilla')

@section('title', 'ListaPersonal')
    
@section('content')
    <h1>Lista del Personal Registrado</h1>
    <a href="{{route('personal.create')}}">Añadir Personal</a>
    <br>
    <ul>
        @foreach ($personal as $persona)
        <li>
            <a href="{{route('personal.show', $persona->id)}}"> {{$persona->nombre_personal}} </a> <!-- $persona-> Lista de datos en BD-->
        </li>
        @endforeach
    </ul>
    {{$personal->links()}}
@endsection