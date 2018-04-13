<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abauts extends Model
{
    protected $fillable = [
        'nr',
        'language',
        'date',
        'title',
        'description',
        'image',
        'class',
    ];
}
