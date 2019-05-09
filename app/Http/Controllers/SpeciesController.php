<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Species;

class SpeciesController extends Controller
{
    function index (Request $req){
        $species=Species::all();
        return  view('species.index',['species'=>$species]);
    }
    function create(Request $req){
        return view('species.create');
    }
    function show(Request $req,Species $species){
        return view('species.show',['species'=> $species]);
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
    
    
}
