<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'lg',
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
