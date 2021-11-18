<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $proveedor = proveedor::orderBy('id','desc')->paginate(); //Para que no se muestren todos los datos
        return view('proveedor.index', compact('proveedor'));
    }
    public function create(){
        return view('proveedor.create');
    }
    public function store(Request $request){
        $proveedor = new proveedor();
        $proveedor->nombre_proveedor = $request->nombre;
        $proveedor->direccion_proveedor = $request->direccion;
        $proveedor->telefono_proveedor = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->save();

        return redirect()->route('proveedor.show', $proveedor);
    }

    public function edit(proveedor $proveedor){
        return view('proveedor.edit', compact('proveedor'));
    }

    public function update(proveedor $proveedor, Request $request){
        $proveedor->nombre_proveedor = $request->nombre;
        $proveedor->direccion_proveedor = $request->direccion;
        $proveedor->telefono_proveedor = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->save();

        return redirect()->route('proveedor.show', $proveedor);
    }
    public function show($id){
        $proveedor = proveedor::find($id); //Recupera de la Base de Datos
        return view('proveedor.show', compact('proveedor'));
    }
}
