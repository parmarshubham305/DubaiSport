<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Cart;

class ProductBasicInfo extends Component
{
    public $product, $productQty = 1, $productPrice;

    public function mount()
    {
        $this->productPrice();
    }

    public function incrementQty()
    {
        $this->productQty += 1; 
        $this->productPrice();
    }

    public function decrementQty()
    {
        if($this->productQty > 1) {
            $this->productQty -= 1;
        }
        $this->productPrice();
    }

    public function productPrice()
    {
        $this->productPrice = $this->productQty * $this->product['discounted_price'];
        // $this->product['discounted_price'] = $this->productQty * $this->product['discounted_price'];
        // if($this->product['discount_percentage'] > 0) {
        //     $this->product['discount_percentage'] = $this->productQty * $this->product['discount_percentage'];
        // }
    }

    public function addToCart()
    {
        if(!\Auth::user()) {
            $cart = \Session::get('cart');

            $cart[$this->product['id']] = [
                'product' => $this->product,
                'price' => $this->productPrice,
                'quantity' => $this->productQty,
            ];

            \Session::put('cart', $cart);
        } else {
            $cart = Cart::where('user_id', \Auth::user()->id)->first();

            $jsonDecodedProducts = json_decode($cart['products']);

            $jsonDecodedProducts[$this->product['id']] = [
                'product' => $this->product,
                'price' => $this->productPrice,
                'quantity' => $this->productQty,
            ];

            Cart::updateOrCreate([
                'user_id' => \Auth::user()->id
            ], [
                'user_id' => \Auth::user()->id,
                'products' => json_encode($jsonDecodedProducts)
            ]);

        }
        $this->emit('addToCartEventFire');
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',  
            'message' => 'Product has been added to cart.', 
        ]);
    }

    public function render()
    {
        return view('livewire.front.product-basic-info');
    }
}
