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
                    <div class="d-flex">
                        <div class="col-md-4 me-1 py-2">
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') ?: (auth()->user() ? auth()->user()->first_name : '') }}" placeholder="First Name" autofocus>
                            @error('first_name')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4 me-1 py-2">
                            <input type="number" name="phone" value="{{ old('phone') ?: (auth()->user() ? auth()->user()->phone : '') }}" class="form-control" placeholder="Mobile Number">
                            @error('phone')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4 me-1 py-2">
                            <input type="email" class="form-control" name="email" value="{{ old('email') ?: (auth()->user() ? auth()->user()->email : '') }}" placeholder="Email Address" autocomplete="email">
                            @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="tabbing-box shipping-data border p-3 mt-2 mb-4">
                        <input class="form-check-input" type="radio" name="delivery_type" value="Delivery" id="flexRadioDefault11" @if(old('delivery_type') == 'Delivery' || old('delivery_type') == '') checked @endif>
                        <label class="form-check-label" for="flexRadioDefault11">
                            <i class="fa-solid fa-truck me-2"></i>  Deliver to my address
                        </label>
                        <div class="tab-content" id="myaddress" aria-labelledby="myaddress-tab" tabindex="0">
                            <h5 class="mb-4">Shipping Address</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex form-group mb-4 position-relative">
                                        <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" name="address_line_1" value="{{ old('address_line_1') }}" class="form-control" placeholder="Address">
                                    </div>
                                    @error('address_line_1')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                        <select class="form-select" name="country_id" value="{{ old('country_id') }}" aria-label="Default select example">
                                            <option selected>Select Country</option>
                                            <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                                        </select>
                                    </div>
                                    @error('country_id')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex form-group mb-4 position-relative">
                                        <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                        <select name="state_id" id="state_id" class="form-select" value="{{ old('state_id') }}" aria-label="Default select example">
                                            <option selected>Select State</option>
                                            @foreach($states as $state)
                                                <option value="{{ $state['id'] }}" data-deliveryCharge="{{ $state['delivery_charge'] }}">{{ $state['name'] }}</option>
                                            @endforeach
                                            </select>
                                    </div>
                                    @error('state_id')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex form-group mb-4 position-relative">
                                        <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="City">
                                    </div>
                                    @error('city')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="d-flex form-group mb-4 position-relative">
                                        <span class="square-icon"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" name="shipping_information" value="{{ old('shipping_information') }}" class="form-control" placeholder="Shipping Information">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="form-check-input" type="radio" name="delivery_type" value="Pickup" id="flexRadioDefault12" @if(old('delivery_type') == 'Pickup') checked @endif>
                        <label class="form-check-label" for="flexRadioDefault12">
                            <i class="fa-solid fa-location-dot me-2"></i> I will pick it up myself
                        </label>
                        <div class="tab-content" id="myself" aria-labelledby="myself-tab" tabindex="0">
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
                    <div class="tabbing-box">
                        <input class="form-check-input" type="radio" name="payment_type" value="Credit Card" @if(old('payment_type') == 'Credit Card') checked @endif name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <i class="fa-solid fa-credit-card me-2 fa-lg"></i>Pay With Card
                        </label>
                        <div class="tab-content" id="flexRadioDefaultContent" aria-labelledby="Card-tab" tabindex="0">
                            <ul class="list-unstyled d-flex align-items-center">
                                <li class="me-3 rounded d-inline-block">
                                    <img src="{{ asset('front/images/mastercard.jpg') }}" alt="mastercard" height="50" class="img-fluid border rounded">
                                </li>
                                <li class="me-3 rounded d-inline-block">
                                    <img src="{{ asset('front/images/paypal.jpg') }}" alt="paypal" height="50" class="img-fluid border rounded">
                                </li>
                                <li class="rounded d-inline-block">
                                    <img src="{{ asset('front/images/visa.jpg') }}" alt="visa" height="50" class="img-fluid border rounded">
                                </li>
                            </ul>
                            <div class="mb-3">
                                <input type="text" name="card_number" id="card-number" value="{{ old('card_number') }}" class="form-control py-3 rounded-0" placeholder="Card Number" maxlength="19">
                            </div>
                            @error('card_number')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="mb-3 d-flex">
                                <input type="text" name="expiry_date" class="form-control py-3 rounded-0" value="{{ old('expiry_date') }}" id="card-exp" placeholder="MM/YYYY" maxlength="7">
                                <input type="text" name="cvv" class="form-control py-3 rounded-0" id="cvv" value="{{ old('cvv') }}" placeholder="CVV" aria-describedby="emailHelp" maxlength="4">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="card_holder_name" value="{{ old('card_holder_name') }}" class="form-control py-3 rounded-0" id="Cardholder" placeholder="Card Holder Name">
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
                        <input class="form-check-input" type="radio" name="payment_type" value="COD" id="flexRadioDefault2" @if(old('payment_type') == 'COD') checked @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                            <i class="fa-solid fa-hand-holding-dollar fa-lg me-2"></i> Cash On Delivery
                        </label>
                        <input class="form-check-input" type="radio" name="payment_type" value="Apple Pay" @if(old('payment_type') == 'Apple Pay') checked @endif id="flexRadioDefault3" >
                        <label class="form-check-label" for="flexRadioDefault3">
                            <i class="fa-brands fa-apple fa-lg me-2"></i> Apple Pay
                        </label>
                    </div>
                    <div class="tab-content py-3 px-0" id="nav-tabContent">

                    </div>
                    <div class="Order-now">
                        <button type="submit" class="btn btn-primary w-100 py-3 fs-5 fw-semibold">PLACE ORDER</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @guest
                <a href="{{ route('register') }}" class="btn btn-info fs-5 mb-4 w-100"> Existing User/ Sign In</a>
                @endguest
                <div class="card order-summery">
                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Order summary</h5>
                        @if(sizeof($cart) > 1)
                            <a href="{{ route('front.cart.index') }}" class="text-primary">({{ sizeof($cart) - 1 }} More Products)</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <img src="{{ $cart[array_key_first($cart)]['product']['main_image'] }}" alt="product_1" class="img-fluid border">
                            </div>
                            <div class="col-md-9">
                                <p class="fw-semibold mb-1 product-heading"><a href="#" tabindex="0">{{ $cart[array_key_first($cart)]['product']['title'] }}</a></p>
                                <p class="text-primary fw-bold product-price d-flex align-items-center">AED {{ number_format($cart[array_key_first($cart)]['product']['discounted_price'], 2) }}</p>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between mb-1"><span>Sub-Total</span> <span class="fw-semibold">AED {{ number_format($subTotal, 2) }} </span></li>
                            <li class="d-flex justify-content-between mb-1"><span>Delivery Charge</span> <span class="fw-semibold deliveryCharge">AED 0</span></li>
                            <input type="hidden" name="delivery_charge_submit" id="delivery_charge_submit"  value="{{ $subTotal }}"/>
                            @if($discountDetails)
                            <li class="d-flex justify-content-between mb-1 text-danger"><span>Coupon Discount</span> <span class="fw-semibold">AED - {{ $discountDetails['discount'] }}</span></li>
                            @endif
                            <li class="d-flex justify-content-between mb-1"><span>Vat(5%)</span> <span class="fw-semibold">AED {{ number_format($discountDetails['vat'], 2) }}</span></li>
                            <li class="d-flex justify-content-between fs-4 "><span class="fw-semibold">Total</span> <span class="fw-semibold totalAmount">AED {{ number_format($totalAmount, 2) }}</span></li>
                            <input type="hidden" name="total_amount_submit" id="total_amount_submit" value="{{ $totalAmount }}" />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript">
    $('#card-number').on('keypress change blur', function () {
        $(this).val(function (index, value) {
            return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
        });
    });

    $('#card-number').on('copy cut paste', function () {
        setTimeout(function () {
            $('#card-number').trigger("change");
        });
    });

    $('#card-exp').on('input',function(){
        var curLength = $(this).val().length;
        if(curLength === 2){
        var newInput = $(this).val();
            newInput += '/';
            $(this).val(newInput);
        }


    });

    $('#state_id').on('change', function(){
        var deliveryCharge = $(this).find(':selected').data('deliverycharge').toFixed(2);
        $('#delivery_charge_submit').val(deliveryCharge);
        $('.deliveryCharge').html('AED ' + deliveryCharge);
        var totalAmount = '{{ $totalAmount }}';
        totalAmount = (parseFloat(totalAmount) + parseFloat(deliveryCharge)).toFixed(2);
        $('.totalAmount').html('AED ' + totalAmount);
        $('#total_amount_submit').val(totalAmount);
    }).trigger();

</script>
@stop