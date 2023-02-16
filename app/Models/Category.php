<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'status',
        'sort'
    ];
    
    public function getImageAttribute($value)
    {
        return env('APP_URL').$value;
    }
}
