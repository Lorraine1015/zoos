<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zoo;
use App\Species;

class SpeciesZoosController extends Controller
{
    //
    public function edit(Request $req,Zoo $zoo){
        $species= Species::all();
        return view('specieszoos.edit',['zoo'=>$zoo,'species'=>$species]);
    }

    public function update(Request $req,Zoo $zoo){
        $sp= $req->input('species');
        //Relaciona el zoologico
        //con las especies indicadas
        //en la variable $sp
        $zoo->species()->attach($sp);
        return redirect()->route('zoos.show',['zoo'=>$zoo]);
        
    }
}
