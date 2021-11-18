<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cliente;

class Clientes extends Component
{
    //Defininimos una variable
    public $cliente; 

    public function render()
    {

        $this->cliente = cliente::all();
        return view('livewire.clientes');
    }
}
