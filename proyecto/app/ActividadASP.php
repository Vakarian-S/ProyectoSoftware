<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadASP extends Model
{

    protected $fillable = [
        'nombre', 'asignatura', "profesor", "cant_estudiantes", "periodo","evidencia"
    ]; //
    //
}
