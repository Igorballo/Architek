<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['email','lien_facebook','lien_youtube',
                        'phone_number','siege','description','logo'];
}
