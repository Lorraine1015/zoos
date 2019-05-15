<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Species;

class AnimalsController extends Controller
{
    //
    function index(Request $req) {
        $animals = Animal::all();
        return view('animals.index', ['animals' => $animals]);
    }
    function create(Request $req) {
        $species = Species::all();
        return view('animals.create', ['species' => $species]);
    }
    function store(Request $req) {
        $animal = $req->input('animals');
        Animal::create($animal);
        return redirect()->route('animals.index');
    }
}
