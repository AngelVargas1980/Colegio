<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $table='alumnos';
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function sede(){
        return $this->belongsTo('App\Models\Sede');
    }
}
