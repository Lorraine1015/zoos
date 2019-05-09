<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    //
    public function zoos()
    {
        return $this->belongsToMany('App\Zoo');//relacion de una especie tiene muchos zoologicos
    }
    public function animals()
    {
        return $this->hasMany('App\Animal');//
    }
}


