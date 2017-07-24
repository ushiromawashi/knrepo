<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
    'usrId',
    'name',
    'url',
    'description'
    ];
}
