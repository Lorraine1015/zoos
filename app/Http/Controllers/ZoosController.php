<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zoo;

class ZoosController extends Controller
{
    //
    function index (Request $req){
        $zoos= Zoo::all();
        return  view('zoos.index',['zoos'=>$zoos]);
    }
    /*function show(Request $req, Zoo $zoo){
        dd($zoo);//imprime el contenido de la variable
    }*/
    function show(Request $req,Zoo $zoo){
        return view('zoos.show',['zoo'=> $zoo]);
    }
    function create(Request $req){
        return view('zoos.create');
    }
    function store(Request $req){
        $n = $req->input('nombre');
        $c = $req->input('ciudad');
        $p = $req->input('pais');
        $t = $req->input('tamaño');
        $pre = $req->input('presupuesto');
        
        $zoo=new \App\Zoo;
        $zoo->nombre=$nombre;
        $zoo->ciudad=$ciudad;
        $zoo->pais=$pais;
        $zoo->tamaño=$tamaño;
        $zoo->presupuesto=$presupuesto;
        $zoo->save();
        return redirect()->route('zoos.index');
    }
}
