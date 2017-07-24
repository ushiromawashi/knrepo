<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'category',
        'name',
        'url',
        'description'
    ];
}
