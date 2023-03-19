<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'details',
        'description',
        'description_2',
        'main_image',
        'other_images',
        'price',
        'status',
        'sort',
        'image_prefix_folder',
    ];

    public function getMainImageAttribute($value)
    {
        return env('APP_URL').$value;
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function productSpecification()
    {
        return $this->hasMany('App\Models\ProductSpecification')->with(['option', 'optionAttribute']);
    }

    public function setStatusAttribute($value) {
        $this->attributes['status'] = $value ? '1' : '0';
    }
}
