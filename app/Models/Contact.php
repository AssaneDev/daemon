<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'telephone',
        'offre',
        'message',
    ];
}
