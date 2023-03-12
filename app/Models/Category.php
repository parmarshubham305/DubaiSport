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
        'sort',
        'option_ids'
    ];
    
    public function getImageAttribute($value)
    {
        return env('APP_URL').$value;
    }

    public function setOptionIdsAttribute($value) {
        $this->attributes['option_ids'] = implode(',', $value);
    }

    public function getOptionIdsAttribute($value) {
        return explode(',', $value);
    }
}
