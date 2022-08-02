<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class Empresa extends Model
{
    use HasFactory;


    public static function allForTypes(string $type):AbstractPaginator
    {
        return self::where('type', $type)->paginate(1);
    }
        
    
}
