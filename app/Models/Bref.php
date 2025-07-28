<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bref extends Model
{
    //
    protected $fillable = [
    'ecole',
    'responsable',
    'telephone',
    'email',
    'objectif',
    'historique',
    'besoins',
    'delai',
];
}
