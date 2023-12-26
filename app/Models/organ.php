<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
    protected $fillable = [
        'name',
        'age',
        'gender',
        'blood',
        'organ',
        'state',
    ];
}
