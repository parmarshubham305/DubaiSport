<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\Address;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::where('iso_code', 'AE')->first();

        $states = State::where('country_id', $country['id'])->get()->toArray();

        if(!\Auth::user()) {
            $cart = \Session::get('cart');

            $subTotal = array_sum(array_column($cart, 'price'));
            $totalAmount = array_sum(array_column($cart, 'price'));
            
        } else {
            $cart = [];
        }

        if(empty($cart)) {
            return redirect()->route('home');
        }

        return view('frontend.checkout', compact('cart', 'subTotal', 'totalAmount', 'country', 'states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        // $user = User::where('email', $data['email'])->first();
        // if(!$user) {
        //     $createUser = User::create([
        //         'first_name' => $data['first_name'],
        //         'last_name' => $data['first_name'],
        //         'phone' => $data['phone'],
        //         'email' => $data['email'],
        //         'password' => \Hash::make('123456'),
        //     ]);

        //     if($createUser) {
        //         Address::create([
        //             'user_id' => $createUser,
        //             'address_line_1' => $data['address_line_1'],
        //             'address_line_2' => $data['address_line_2'],
        //             'country_id' => $data['country_id'],
        //             'state_id' => $data['state_id'],
        //             'city' => $data['city'],
        //         ]);
        //     }
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
