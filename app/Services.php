<?php

namespace App;

use Laravel\Scout\Searchable;
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
