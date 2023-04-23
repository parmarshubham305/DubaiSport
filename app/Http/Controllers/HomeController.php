<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;

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
}
