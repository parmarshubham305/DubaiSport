<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application wishlist.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function wishlist()
    {
        $productIds = Wishlist::where('user_id', auth()->user()->id)->pluck('product_id','product_id')->toArray();

        $products = Product::whereIn('id', $productIds)->with('category')->get()->toArray();

        return view('frontend.wishlist', compact('products'));
    }

    public function removeWishlistItem($productId) {
        Wishlist::updateOrCreate([
            'user_id' => \Auth::user()->id,
            'product_id' => $productId
        ])->delete();

        return redirect()->back();
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        $cart = Cart::where('user_id', \Auth::user()->id)->first();
        if($cart) {
            $jsonDecodedProducts = json_decode($cart['products'], true);
        }

        $jsonDecodedProducts[$product['id']] = [
            'product' => $product,
            'price' => $product['discounted_price'],
            'quantity' => 1,
        ];

        Cart::updateOrCreate([
            'user_id' => \Auth::user()->id
        ], [
            'user_id' => \Auth::user()->id,
            'products' => json_encode($jsonDecodedProducts)
        ]);
        return redirect()->back()->with('message', 'Added to Cart');
    }
}
