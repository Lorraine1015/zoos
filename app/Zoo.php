<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    //
    public function species()
    {
        return $this->belongsToMany('App\Species');//relacion de un zoologico tiene muchas especies
    }
}
