<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Cart;

class ShoppingCart extends Component
{
    public $carts, $totalAmount, $subTotal, $deliveryCharge = 0, $tax = 0;

    public function mount()
    {
        if(!\Auth::user()) {
            $this->carts = \Session::get('cart');
        }
        $this->priceSummary();
    }

    public function incrementQty($productId)
    {
        $this->carts[$productId]['quantity'] += 1; 
        $this->productPrice($productId);
    }

    public function decrementQty($productId)
    {
        if($this->carts[$productId]['quantity'] > 1) {
            $this->carts[$productId]['quantity'] -= 1;
        }
        $this->productPrice($productId);
    }

    public function productPrice($productId)
    {
        $this->carts[$productId]['price'] = $this->carts[$productId]['quantity'] * $this->carts[$productId]['product']['discounted_price'];
        // $this->carts[$productId]['product']['discounted_price'] = $this->carts[$productId]['quantity'] * $this->carts[$productId]['product']['discounted_price'];
        // if($this->carts[$productId]['product']['discount_percentage'] > 0) {
        //     $this->carts[$productId]['product']['discount_percentage'] = $this->carts[$productId]['quantity'] * $this->carts[$productId]['product']['discount_percentage'];
        // }
        $this->priceSummary();
    }

    public function priceSummary()
    {
        $amountSummary = 0;
        foreach ($this->carts as $key => $cart) {
            $amountSummary += $cart['price'];
        }
        $this->subTotal = $amountSummary;
        $this->totalAmount = $amountSummary;

        \Session::put('cart', $this->carts);
    }

    public function render()
    {
        return view('livewire.front.shopping-cart');
    }
}
