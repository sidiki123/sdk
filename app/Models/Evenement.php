<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'titre',
        'evendate',
        'heure',
        'lieu',
        'evencontenu'
    ];
}
