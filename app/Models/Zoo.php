<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        'image',
        'species',
        'race',
        'age',
        'weight',
        'heidht'
    ];
}
