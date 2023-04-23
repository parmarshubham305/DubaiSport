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
        'discounted_price',
        'discount_percentage',
        'status',
        'sort',
        'image_prefix_folder',
        'best_seller',
        'popular_product'
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

    public function setBestSellerAttribute($value) {
        $this->attributes['best_seller'] = $value ? '1' : '0';
    }

    public function setPopularProductAttribute($value) {
        $this->attributes['popular_product'] = $value ? '1' : '0';
    }
}
