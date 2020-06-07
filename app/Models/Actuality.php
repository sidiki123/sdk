<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actuality extends Model
{
    protected $fillable = [
        'titre',
        'photo',
        'date',
        'newsactu'
    ];
}
