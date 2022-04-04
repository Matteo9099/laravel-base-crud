<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = 
    [
        'thumb',
        'title',
        'series',
        'type',
        'sale_date',
        'description',
        'price'
    ];
}
