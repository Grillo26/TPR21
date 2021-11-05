<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = cliente::paginate();
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
    }
    public function show($id){
        $cliente = cliente::find($id);
        return view('cliente.show', compact(('cliente')));
    }
}
