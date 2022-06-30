<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    protected $fillable = ['nom','competence','lien_twitter','lien_linkedin','photo_collaborateur'];
}
