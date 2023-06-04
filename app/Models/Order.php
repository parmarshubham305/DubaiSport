<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'products',
        'status',
        'delivery_type',
        'shipping_note',
        'discount'
    ];

    public function getPayment()
    {
        return $this->hasOne('App\Models\Payment');
    }
}
