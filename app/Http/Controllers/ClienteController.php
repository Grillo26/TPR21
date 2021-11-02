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
    public function show($id){
        $cliente = cliente::find($id);
        return view('cliente.show', compact(('cliente')));
    }
}
