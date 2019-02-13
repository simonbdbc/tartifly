<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $fillable = [
        'libelle',
        'pays',
        'ville',
        'duree',
        'date_debut',
        'date_fin',
        'cout',
        'photo',
        'description',
        'disponibilite'
    ];
}
