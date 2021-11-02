@extends('layouts.plantilla')

@section('title', 'ListaPersonal')
    
@section('content')
    <h1>Lista del Personal Registrado</h1>
    <a href="{{route('personal.create')}}">Añadir Personal</a>
    <ul>
        @foreach ($personal as $persona)
        <li>{{$persona->nombre_personal}}</li>
        @endforeach
    </ul>
    {{$personal->links()}}
@endsection