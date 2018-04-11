<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sercives extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icons'
    ];
}
