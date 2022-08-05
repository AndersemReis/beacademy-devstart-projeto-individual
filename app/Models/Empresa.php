<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\AbstractPaginator;

class Empresa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type',
        'name',
        'enterprise',
        'document',
        'ie_rg',
        'contact_name',
        'cel_phone',
        'email',
        'phone',
        'cep',
        'address',
        'quarter',
        'city',
        'state',
        'observation'
        
    ];

    public static function allForTypes(string $type, int $quantity = 10):AbstractPaginator
    {
        return self::where('type', $type)->paginate($quantity);
    }
        
    
}
