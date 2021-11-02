@extends('layouts.plantilla')

@section('title', 'ListaCliente')

@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{route('cliente.create')}}">Añadir Cliente</a>

    <ul>
        @foreach ($cliente as $clientes)
            <li>
                <a href="{{route('cliente.show', $clientes->id)}}"> {{$clientes->nombre_cliente}}</a>
            </li>
        @endforeach

    </ul>
    {{$cliente->links()}}
    
@endsection