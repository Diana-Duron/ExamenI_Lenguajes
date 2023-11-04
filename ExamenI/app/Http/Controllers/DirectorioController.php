<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\directorio;

class DirectorioController extends Controller
{
    //

    public function index(){
        $directorios = Directorio::all();
        return view('directorio', compact('directorios'));
    }

    public function crear(){
        return view('crearEntrada');
    }

    public function buscar(){
        return view('buscar');
    }

    public function eliminar($id){
        $directorio = Directorio::find($id);

        if ($directorio <> null ){
            return $directorio;
        }

         return redirect()->route('directorios');
    }
}
