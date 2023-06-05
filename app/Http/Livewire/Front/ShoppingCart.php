<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Coupon;

class ShoppingCart extends Component
{
    public $carts = [], $totalAmount, $subTotal, $deliveryCharge = 0, $tax = 0, $discount = 0, $couponCode = '';

    public function mount()
    {
        if(!\Auth::user()) {
            $this->carts = \Session::get('cart');
        } else {
            $cart = Cart::where('user_id', \Auth::user()->id)->first();
            if($cart) {
                $this->carts = json_decode($cart['products'], true);
            }
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
        if($this->carts) {
            foreach ($this->carts as $key => $cart) {
                $amountSummary += $cart['price'];
            }
            $this->subTotal = $amountSummary;
            $this->totalAmount = $amountSummary;
            if(!\Auth::user()) {
                \Session::put('cart', $this->carts);
            } else {
                Cart::where('user_id', \Auth::user()->id)->update(['products' => json_encode($this->carts)]);
            }
        }
    }

    public function removeProduct($key)
    {
        if(!\Auth::user()) {
            $carts = \Session::get('cart');
            array_splice($carts, $key, 1);
            $this->carts = $carts;
            \Session::put('cart', $carts);
        } else {
            $userCart = Cart::where('user_id', \Auth::user()->id)->first();
            $carts = json_decode($userCart['products'], true);
            array_splice($carts, $key, 1);
            $this->carts = $carts;
            Cart::where('user_id', \Auth::user()->id)->update(['products' => json_encode($carts)]);
        }
        $this->emit('addToCartEventFire');
    }

    public function applyDiscount()
    {
        if($this->discount <= 0) {
            $couponInfo = Coupon::where('coupon_code', $this->couponCode)
                            ->where('start_date', '<=', date('Y-m-d'))
                            ->whereDate('end_date', '>=', date('Y-m-d'))
                            ->first();
            if($couponInfo) {
                $this->discount = round(($this->subTotal * $couponInfo['percentage']) / 100, 2);
                $this->totalAmount -= $this->discount; 

                $discountSession = [
                    'coupon_code' => $this->couponCode,
                    'discount' => $this->discount
                ];
                \Session::put('cart_discount', json_encode($discountSession));

                $this->dispatchBrowserEvent('swal:modal', [
                    'type' => 'success',  
                    'message' => 'Discount Applied!', 
                ]);
            }
        } else {
            \Session::forget('cart_discount');
        }
    }

    public function render()
    {
        return view('livewire.front.shopping-cart');
    }
}
