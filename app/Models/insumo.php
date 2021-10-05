<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumo extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function insumoPlatos(){
        return $this->hasMany('App\Models\insumo_plato');
    }
    public function proveedorInsumos(){
        return $this->hasMany('App\Models\proveedor_insumo');
    }
}
