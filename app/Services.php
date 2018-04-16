<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'lg',
        'title',
        'description',
        'icons'
    ];
}
