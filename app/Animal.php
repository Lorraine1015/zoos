<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Animal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_number', 'genre', 'birth_year', 'country', 'continent', 'species_id'
    ];

    public function species() {
        return $this->belongsTo('App\Species');
    }
    
}