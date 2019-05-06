<?php

namespace App\Http\Controllers;

//FROM Request import Request or:
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
                   //tipo de dato $variable
    function index (Request $req){
        return  view('registro.index');
    }
    function pruebas (Request $req){
        return view('registro.pruebas');
    }
    
    
}
