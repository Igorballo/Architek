<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['nom_projet','statut','description','photo'];
}
