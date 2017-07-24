<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trening extends Model
{
    protected $fillable = [
    'name',
    'url',
    'description'
    ];
}
