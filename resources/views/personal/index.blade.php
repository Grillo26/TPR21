@extends('layouts.plantilla')

@section('title', 'PersonalCreate')
    
@section('content')
    <h1>Lista del Personal Registrado</h1>
    <ul>
        @foreach ($personal as $persona)
        <li>{{$persona->nombre_personal}}</li>
        {{$personal->links()}}
            
        @endforeach
    </ul>
@endsection