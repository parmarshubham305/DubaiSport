@extends('frontend.layouts.layout')
@section('content')
<div class="shopping-cart spacing-y">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Checkout</h2>
        </div>
        <form action="{{ route('front.checkout.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-9 checkout-box">
                <div class="border p-3 mb-4">
                    <h5 class="mb-4">Billing Information</h5>
                    <form class="mb-3">
                        <div class="d-flex">
                            <div class="col-md-4 me-1 py-2">
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" autofocus>
                                @error('email')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 me-1 py-2">
                                <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Mobile Number">
                                @error('phone')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 me-1 py-2">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="email">
                                @error('email')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
                <div class="nav nav-tabs address-tab nav-justified border-0 mb-4" id="nav-tab" role="tablist">
                    <a href="javascript:void(0)" class="nav-link me-3 active" id="myaddress-tab" data-bs-toggle="tab" data-bs-target="#myaddress" aria-controls="myaddress"><i class="fa-solid fa-truck me-2"></i>  Deliver to my address </a>
                    <a href="javascript:void(0)" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#myself" aria-controls="myself"><i class="fa-solid fa-location-dot me-2"></i> I will pick it up myself</a>
                </div>
                <div class="tab-content border p-3 mt-2 mb-4" id="nav-tabContent">
                <div class="tab-pane fade show active" id="myaddress" aria-labelledby="myaddress-tab" tabindex="0">
                    <h5 class="mb-4">Shipping Address</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-4 position-relative">
                                <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="address_line_1" value="{{ old('address_line_1') }}" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-4 position-relative">
                                <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="address_line_2" value="{{ old('address_line_2') }}" class="form-control" placeholder="Street Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-4 position-relative">
                                <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <select class="form-select" name="country_id" aria-label="Default select example">
                                    <option selected>Select Country</option>
                                    <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-4 position-relative">
                                <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <select name="state_id" class="form-select" aria-label="Default select example">
                                    <option selected>Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-4 position-relative">
                                <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex form-group mb-4 position-relative">
                                <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="shipping_information" value="{{ old('shipping_information') }}" class="form-control" placeholder="Shipping Information">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="myself" aria-labelledby="myself-tab" tabindex="0">
                    <h5 class="mb-4">Select one of our stores</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="store-address border border-gray-800 p-4 h-100 position-relative">
                                <p class="fw-semibold">Dubai</p>
                                <p class="mb-0">Shop No 1, abc abcd abc</p>
                                <p class="mb-0">asd</p>
                                <p class="mb-0">Store working hours</p>
                                <p class="mb-0">9:00 AM - 8:00 PM (7 Days A Week)</p>
                                <i class="fa-solid fa-circle-check fa-2x text-success position-absolute top-0 end-0 p-4"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <iframe width="100%" height="250" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Dubai+(Dubai%20Sport)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            <a href="https://www.maps.ie/distance-area-calculator.html">measure area
                                map</a></iframe>
                        </div>
                    </div>
                </div>
                </div>
                <div class="border p-3 mb-4 payment_methods">
                    <h5 class="mb-4">Payment Methods</h5>
                    <div class="nav nav-tabs address-tab border-0 mb-4" id="nav-tab" role="tablist">
                        <a href="javascript:void(0)" class="nav-link me-3 active" id="Card-tab" data-bs-toggle="tab" data-bs-target="#Card" aria-controls="Card"><i class="fa-solid fa-credit-card me-2 fa-lg"></i>Pay With Card</a>
                        <a href="javascript:void(0)" class="nav-link me-3" id="Cash-tab" data-bs-toggle="tab" data-bs-target="#Cash" aria-controls="Cash">
                            <i class="fa-solid fa-hand-holding-dollar fa-lg me-2"></i> Cash On Delivery
                        </a>
                        <a href="javascript:void(0)" class="nav-link" id="apple-tab" data-bs-toggle="tab" data-bs-target="#apple" aria-controls="apple">
                            <i class="fa-brands fa-apple fa-lg me-2"></i> Apple Pay
                        </a>
                    </div>
                    <div class="tab-content py-3 px-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="Card" aria-labelledby="Card-tab" tabindex="0">
                            <ul class="list-unstyled d-flex align-items-center">
                                <li class="me-3 rounded d-inline-block">
                                    <img src="{{ env('APP_URL').'front/images/mastercard.jpg' }}" alt="mastercard" height="50" class="img-fluid border rounded">
                                </li>
                                <li class="me-3 rounded d-inline-block">
                                    <img src="{{ env('APP_URL').'front/images/paypal.jpg' }}" alt="paypal" height="50" class="img-fluid border rounded">
                                </li>
                                <li class="rounded d-inline-block">
                                    <img src="{{ env('APP_URL').'front/images/visa.jpg' }}" alt="visa" height="50" class="img-fluid border rounded">
                                </li>
                            </ul>
                            <div class="mb-3">
                                <input type="number" name="card_number" class="form-control py-3 rounded-0" id="cardno" placeholder="Card Number">
                                </div>
                                <div class="mb-3 d-flex">
                                <input type="text" name="expiry_date" class="form-control py-3 rounded-0" id="date" placeholder="MM/YY" aria-describedby="emailHelp">
                                <input type="number" name="cvv" class="form-control py-3 rounded-0" id="cvv" placeholder="CVV" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                <input type="text" name="card_holder_name" class="form-control py-3 rounded-0" id="Cardholder" placeholder="Card Holder Name">
                                </div>
                                <div class="services mb-4">
                                <div class="d-flex align-items-center">
                                        <span class="service-icon me-3"><span class="custom-icon custom-secure-shopping"></span></span>
                                        <span>
                                            <span class="d-block fw-semibold lh-2 text-primary">Secure Shopping </span>
                                            <small>Safe and Secure Checkout</small>
                                        </span>
                                    </div>
                                </div>
                                <ul>
                                <li>Our checkout process is safe and secure.</li>
                                <li>We do not save your card details for any reason.</li>
                                <li> Your personal details and payment information is fully encrypted and processed.</li>
                                </ul>
                        </div>
                    </div>
                    <div class="Order-now">
                        <button type="submit" class="btn btn-primary w-100 py-3 fs-5 fw-semibold">PLACE ORDER</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a href="{{ route('register') }}" class="btn btn-info fs-5 mb-4 w-100"> Existing User/ Sign In</a>
                <div class="card order-summery">
                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Order summary</h5>
                        <a href="{{ route('front.cart.index') }}" class="text-primary">({{ sizeof($cart) - 1 }} More Products)</a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <img src="{{ $cart[array_key_first($cart)]['product']['main_image'] }}" alt="product_1" class="img-fluid border">
                            </div>
                            <div class="col-md-9">
                                <p class="fw-semibold mb-1 product-heading"><a href="#" tabindex="0">{{ $cart[array_key_first($cart)]['product']['title'] }}</a></p>
                                <p class="text-primary fw-bold product-price d-flex align-items-center">AED {{ number_format($cart[array_key_first($cart)]['product']['price'], 2) }}</p>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between mb-1"><span>Sub-Total</span> <span class="fw-semibold">AED {{ number_format($subTotal, 2) }} </span></li>
                            <li class="d-flex justify-content-between mb-1"><span>Delivery Charge</span> <span class="fw-semibold">AED 0</span></li>
                            <li class="d-flex justify-content-between mb-1"><span>Vat(5%)</span> <span class="fw-semibold">AED 0</span></li>
                            <li class="d-flex justify-content-between fs-4 "><span class="fw-semibold">Total</span> <span class="fw-semibold">AED {{ number_format($totalAmount, 2) }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop