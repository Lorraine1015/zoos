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
        $zoo->name=$n;
        $zoo->city=$c;
        $zoo->country=$p;
        $zoo->size=$t;
        $zoo->annual_budget=$pre;
        $zoo->save();
        
        return redirect()->route('zoos.index');
    }

    function edit(Request $req,Zoo $zoo){
        return view('zoos.edit',['zoo'=>$zoo]);
    }

    function update(Request $req,Zoo $zoo){
        $zoo->name=$req->input('nombre');
        $zoo->city=$req->input('ciudad');
        $zoo->country=$req->input('pais');
        $zoo->size=$req->input('tamaño');
        $zoo->annual_budget=$req->input('presupuesto');
        $zoo->save();
        return redirect()->route('zoos.show',['zoo'=>$zoo]);
    }

    function delete(Request $req,Zoo $zoo){
        $zoo->delete();
        return redirect()->route('zoos.index');
    }
}
