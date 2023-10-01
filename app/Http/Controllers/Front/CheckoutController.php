<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Cart;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use App\Models\Payment;
use App\Models\BillingInfo;
use App\Models\StripeCustomer;
use App\Models\Stock;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get()->toArray();

        $states = State::get()->toArray();

        $discountDetails = json_decode(\Session::get('cart_discount'), true);

        if(!\Auth::user()) {
            $cart = \Session::get('cart');
        } else {
            $userCart = Cart::where('user_id', \Auth::user()->id)->first();
            $cart = json_decode($userCart['products'], true);
        }
        if($cart) {
            $subTotal = array_sum(array_column($cart, 'productDiscountPrice'));
            $totalAmount = array_sum(array_column($cart, 'productDiscountPrice'));
            if($discountDetails) {
                $totalAmount -= $discountDetails['discount'];
                $vat = ($totalAmount * 5) / 100; 
                $totalAmount += $vat;
                $discountDetails['vat'] = $vat;
                \Session::put('cart_discount', json_encode($discountDetails));
            } else {
                $vat = ($totalAmount * 5) / 100; 
                $totalAmount += $vat;
            }
        }

        if(empty($cart)) {
            return redirect()->route('home');
        }

        return view('frontend.checkout', compact('cart', 'subTotal', 'totalAmount', 'countries', 'states', 'discountDetails', 'vat'));
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
        $validated = $request->validate([
                'first_name' => 'required|max:255',
                'phone' => 'required|numeric|digits:10',
                'email' => 'required|max:255', //unique:users
            ]);

        $data = $request->all();
        $discountDetails = \Session::get('cart_discount');
        $discountDetails = json_decode($discountDetails, true);
        $discountDetails['delivery_charge'] = $data['delivery_charge_submit'];

        if($data['delivery_type'] == 'Delivery') {
            $validated = $request->validate([
                'address_line_1' => 'required|max:10',
                'country_id' => 'required',
                'state_id' => 'required',
                'city' => 'required',
            ]);
        }
        if($data['payment_type'] == 'Credit Card') {
            $validated = $request->validate([
                'card_number' => 'required|max:19',
                'card_holder_name' => 'required',
                'expiry_date' => 'required',
                'cvv' => 'required|max:4',
            ]);
        }

        if(!\Auth::user()) {
            $user = User::where('email', $data['email'])->first();
            if(!$user) {
                $user = User::create([
                    'first_name' => $data['first_name'],
                    'last_name' => $data['first_name'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'password' => \Hash::make('123456'),
                ]);
            }
            $cart = \Session::get('cart');
        } else {
            $user = \Auth::user();
            $cart = Cart::where('user_id', \Auth::user()->id)->first();
            $cart = json_decode($cart['products'], true);
        }

        // $cartTotalAmount = array_sum(array_column($cart, 'price'));
        $cartTotalAmount = $data['total_amount_submit'];

        if($user && $data['delivery_type'] == 'Delivery') {
            Address::create([
                'user_id' => $user['id'],
                'address_line_1' => $data['address_line_1'],
                'address_line_2' => $data['address_line_2'],
                'country_id' => $data['country_id'],
                'state_id' => $data['state_id'],
                'city' => $data['city'],
            ]);
        }

        if($data['payment_type'] == 'Credit Card') {

            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            try {
                $cardToken = \Stripe\Token::create(array(
                    'card' => array(
                        'number' => str_replace(' ', '', $data['card_number']),
                        'exp_month' => explode('/', $data['expiry_date'])[0],
                        'exp_year' => explode('/', $data['expiry_date'])[1],
                        'cvc' => $data['cvv']
                    ),
                ));
            } catch(\Exception $e) {
                return back()->withErrors(['card_number' => $e->getMessage()]);
            }

            $stripeCustomer = StripeCustomer::where('user_id', $user['id'])->first();

            if(!$stripeCustomer) {
                $stripeCustomer = \Stripe\Customer::create(array(
                    "email" => $user['email'],
                    "name" => $user['first_name'] .' '.$user['last_name'],
                    // "source" => $cardToken->id
                ));
                $customer_token = $stripeCustomer->id;

                StripeCustomer::create([
                    'user_id' => $user['id'],
                    'stripe_customer_id' => $customer_token
                ]);


            } else {
                $customer_token = $stripeCustomer['stripe_customer_id'];
            }
            $cardAttach = \Stripe\Customer::createSource(
                $customer_token,
                ['source' => $cardToken->id]
            );
            $charge = \Stripe\Charge::create(array(
                'amount' => $cartTotalAmount * 100,
                'currency' => 'AED',
                'customer' => $customer_token,
                'source' => $cardAttach->id,
                'description' => ''
            ));

            if($charge->status === 'succeeded') {
                $order = Order::create([
                    'user_id' => $user['id'],
                    'products' => json_encode($cart),
                    'delivery_type' => $data['delivery_type'],
                    'shipping_note' => $data['shipping_information'],
                    'discount' => json_encode($discountDetails)
                ]);

                Payment::create([
                    'user_id' => $user['id'],
                    'order_id' => $order['id'],
                    'txn_id' => $charge->id,
                    'payment_type' => $data['payment_type'],
                    'price' => $cartTotalAmount
                ]);

                //--- Debit Product Stock
                foreach ($cart as $key => $value) {
                    Stock::create([
                        'product_id' => $value['product']['id'],
                        'type' => 'Debit',
                        'qty' => $value['quantity'],
                        'note' => 'Order #'.$order['id']
                    ]);
                }

                \Auth::loginUsingId($user['id']);
            } else {
                return redirect()->back();
            }
        } else {
            $order = Order::create([
                'user_id' => $user['id'],
                'products' => json_encode($cart),
                'delivery_type' => $data['delivery_type'],
                'shipping_note' => $data['shipping_information'],
                'discount' => json_encode($discountDetails)
            ]);
            Payment::create([
                'user_id' => $user['id'],
                'order_id' => $order['id'],
                'txn_id' => '',
                'payment_type' => $data['payment_type'],
                'price' => $cartTotalAmount
            ]);

            //--- Debit Product Stock
            foreach ($cart as $key => $value) {
                Stock::create([
                    'product_id' => $value['product']['id'],
                    'type' => 'Debit',
                    'qty' => $value['quantity'],
                    'note' => 'Order #'.$order['id']
                ]);
            }

            \Auth::loginUsingId($user['id']);
        }
        BillingInfo::create([
            'order_id' => $order['id'],
            'name' => $data['first_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
        if(\Auth::user()){
            Cart::where('user_id', \Auth::user()->id)->delete();
        }
        \Session::forget('cart');
        return redirect()->route('front.orders.index');
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
