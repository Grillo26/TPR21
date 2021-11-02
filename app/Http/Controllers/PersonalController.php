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

    public function show($id){

        $personal = personal::find($id); //Recupero todo lo del ID
        
        //return view('cursos.show',['curso'=> $curso]);
        return view('personal.show' , compact('personal'));
    }
}
