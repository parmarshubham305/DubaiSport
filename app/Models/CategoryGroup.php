<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'status',
        'include_in_header',
        'sort'
    ];

    public function getIconAttribute($value)
    {
        return $value != '' ? env('APP_URL').$value : '';
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Category')->where('status', '1')->orderBy('sort', 'ASC');
    }
}
