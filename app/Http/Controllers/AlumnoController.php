<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function consultar(){
        $alumnos = Alumno::paginate(8);

        return view('alumno.alumnos', compact('alumnos'));
    }
}
