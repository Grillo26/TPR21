<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal = personal::orderBy('id','desc')->paginate();
        return view('personal.index', compact('personal'));
    }

    public function create(){
        return view('personal.create');
    }

    public function store(Request $request){

        //Validación de campos
        $request->validate([
            'nombre'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'tipo'=> 'required',
            'turno'=> 'required'
        ]);

        $personal = new personal();
        $personal->nombre_personal = $request->nombre;
        $personal->telefono_personal = $request->telefono;
        $personal->direccion_personal = $request->direccion;
        $personal->id_tipo = $request->tipo;
        $personal->id_turno = $request->turno;
        $personal->save();

        return redirect()->route('personal.show', $personal); //redirigue al dato recien registrado
    }

    public function edit(personal $personal){
        return view('personal.edit', compact('personal'));
    }

    public function update(personal $personal, Request $request){

        //Validación de campos
        $request->validate([
            'nombre'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'tipo'=> 'required',
            'turno'=> 'required'
        ]);
        
        $personal->nombre_personal = $request->nombre;
        $personal->telefono_personal = $request->telefono;
        $personal->direccion_personal = $request->direccion;
        $personal->id_tipo = $request->tipo;
        $personal->id_turno = $request->turno;
        $personal->save();
        return redirect()->route('personal.show', $personal);
    }

    public function show(personal $personal){

        //$personal = personal::find($id);Recupero todo lo del ID
        
        //return view('cursos.show',['curso'=> $curso]);
        return view('personal.show' , compact('personal'));
    }
}
