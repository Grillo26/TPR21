<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = cliente::orderBy('id','desc')->paginate();
        return view('cliente.index', compact('cliente'));
    }
    public function create(){
        return view('cliente.create');
    }
    public function store(Request $request){

        $cliente = new cliente();
        $cliente->nombre_cliente = $request-> nombre; //$Variable-> Atributo de BD = $Objeto -> NombreDelFormulario
        $cliente->dirección_cliente = $request-> direccion;
        $cliente->telefono_cliente = $request-> telefono;
        $cliente->fechaNac_cliente = $request-> FechaNac;
        $cliente->observaciones_cliente = $request-> observaciones;
        $cliente->save();

        return redirect()->route('cliente.show', $cliente);
    }
    public function show(cliente $cliente){
        return view('cliente.show', compact(('cliente')));
    }
    public function edit(cliente $cliente){
        return view('cliente.edit', compact('cliente'));
    }
    public function update(Request $request, cliente $cliente){
        $cliente->nombre_cliente = $request-> nombre; //$Variable-> Atributo de BD = $Objeto -> NombreDelFormulario
        $cliente->dirección_cliente = $request-> direccion;
        $cliente->telefono_cliente = $request-> telefono;
        $cliente->fechaNac_cliente = $request-> FechaNac;
        $cliente->observaciones_cliente = $request-> observaciones;
        $cliente->save();

        return redirect()->route('cliente.show', $cliente);
    }
}
