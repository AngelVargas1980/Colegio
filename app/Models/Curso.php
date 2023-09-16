<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $table='cursos';
    use HasFactory;

    //Relación uno a uno (inversa)
    public function tipo_mercancia(){
        return $this->belongsTo('App\Models\Tipo_mercancia');
    }
}
