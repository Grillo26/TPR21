<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal = personal::paginate();
        return view('personal.index', compact('personal'));
    }

    public function create(){
        return view('personal.create');
    }

    public function store(Request $request){
        $personal = new personal();
        $personal->nombre_personal = $request->nombre;
        $personal->telefono_personal = $request->telefono;
        $personal->direccion_personal = $request->direccion;
        $personal->id_tipo = $request->tipo;
        $personal->id_turno = $request->turno;
        $personal->save();
    }

    public function show($id){

        $personal = personal::find($id); //Recupero todo lo del ID
        
        //return view('cursos.show',['curso'=> $curso]);
        return view('personal.show' , compact('personal'));
    }
}
