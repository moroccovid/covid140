<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nom',
        'telephone',
        'cin',
        'email',
        'age',
        'dureet',
        'sexe',
        'question1',
        'question2',
        'question3',
        'question4',
        'traite',
        'positif',
    ];


}
