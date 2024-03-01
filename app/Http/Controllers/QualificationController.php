<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function create(){

        return view('qualificationView');

    }

    public function store(Request $request){
        
        $calificacion = new Qualification();
        $calificacion->name = $request->name;
        $calificacion->nota1 = $request->nota1;
        $calificacion->nota2 = $request->nota2;
        $calificacion->nota3 = $request->nota3;

        $promedio = ($calificacion->nota1 + $calificacion->nota2 + $calificacion->nota3) / 3;
        $calificacion->promedio = $promedio;

        $calificacion->save();
        return $calificacion;

    }
}
