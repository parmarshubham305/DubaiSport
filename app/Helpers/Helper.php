<?php

namespace App\Helpers;
use App\Models\Product;
use App\Models\MasterOption;

class Helper
{
    public static function priceRender($productId)
    {
        $product = Product::find($productId);

        $html = '<p class="text-primary fw-bold product-price d-flex align-items-center flex-wrap">';
        if($product['discount_percentage'] > 0) {
            $html .= 'AED '.number_format($product['discounted_price'],2).'<del class="text-secondary ms-1">AED '.number_format($product['price'],2).'</del>
            <small class="badge ms-1 bg-primary px-2">'.$product['discount_percentage'].'% OFF</small>';
        } else {
            $html .= 'AED '.number_format($product['price'],2);
        }
        $html .='</p>';

        return $html;
    }

    public static function getProductBrand($productId)
    {
        $masterOptionId = MasterOption::where('name', 'LIKE','%Brand%')->value('id');
        
        $product = Product::where('id', $productId)->with('productSpecification', function($query) use ($masterOptionId)
        {
            $query->where('option_id', $masterOptionId);
        })->first();

        if($product['productSpecification'] && isset($product['productSpecification'][0])) {
            return $product['productSpecification'][0]['optionAttribute']['value'];
        } else {
            return '';
        }
    }
}