@extends('layouts.plantilla')

@section('title', 'ListaProveedores')

@section('content')
    <h1>Lista de Proveedores</h1>
    <a href="{{route('proveedor.create')}}">Añadir Proveedor</a>
    
    <ul>
        @foreach ($proveedor as $proveedors)
            <li>
                <a href="{{route('proveedor.show', $proveedors->id)}}">{{$proveedors->nombre_proveedor}}</a>
            </li>
        @endforeach
    </ul>
    {{$proveedor->links()}} <!--Añade boton de NextPage-->
@endsection