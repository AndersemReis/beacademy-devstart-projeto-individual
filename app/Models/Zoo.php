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
        'family',
        'age',
        'weight',
        'height'
    ];

    public function getZoos(string  $search = null)
    {
        $zoos = $this->where( function ($query) use ($search){
            if($search){
                $query->where('species', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })->paginate(5);
        
        return $zoos;
    }
}
