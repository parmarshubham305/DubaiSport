<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'sort'
    ];

    public function getImageAttribute($value)
    {
        return env('APP_URL').$value;
    }
}
