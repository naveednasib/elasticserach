<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articale extends Model
{
    protected $casts = [
        'tags' => 'json',
    ];
}
