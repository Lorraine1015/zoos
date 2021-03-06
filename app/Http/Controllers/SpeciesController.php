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
        $species = $req->input('species');
        Species::create($species);
        return redirect()->route('species.index');
    }
    function edit(Request $req, Species $species) {
        return view('species.edit', ['species' => $species]);
    }
    function update(Request $req, Species $species) {
        $species->vulgar_name = $req->input('species.vulgar_name');
        $species->scientific_name = $req->input('species.scientific_name');
        $species->family = $req->input('species.family');
        $species->is_on_danger = $req->input('species.is_on_danger');
        $species->save();
        return redirect()->route('species.show', ['species' => $species]);
    }
    function delete(Request $req, Species $species) {
        $species->delete();
        return redirect()->route('species.index');
    }
    
}
