<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    //relacion uno a muchos
    public function ventas(){
        return $this->hasMany('App\Models\venta');
    }

    //relacion uno a muchos invertida
    public function cliente(){
        return $this->belongsTo('App\Models\cliente');
    }
    public function mesa(){
        return $this->belongsTo('App\Models\mesa');
    }
    public function personal(){
        return $this->belongsTo('App\Models\personal');
    }
}
