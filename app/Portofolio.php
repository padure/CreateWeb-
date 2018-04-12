<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'name',
        'subtitle',
        'description',
        'date',
        'client',
        'categorie',
        'url',
        'thumbnail'
    ];
}
