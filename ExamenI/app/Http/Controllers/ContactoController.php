<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacto;
use App\Models\directorio;

class ContactoController extends Controller
{
    //
    public function mostrarContactosPorDirectorio($idD)
    {   
        $contactos = contacto::where('codigoEntrada', $idD)->get();
        return view('vercontactos', compact('contactos'));
    }
}
