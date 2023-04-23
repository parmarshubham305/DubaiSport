@extends('frontend.layouts.layout')
@section('content')
<div id="products" class="spacing-y">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="product_images" class="carousel slide inner_slider mb-4 position-sticky">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <a href="#" data-src="{{ $product['main_image'] }}" class="fancybox-img"
                                data-fancybox="product">
                                <img src="{{ $product['main_image'] }}" title="product 1" class="img-fluid">
                            </a>
                        </div>
                        @foreach($product['other_images'] as $otherImage)
                        <div class="carousel-item">
                            <a href="#" data-src="{{ env('APP_URL').$otherImage }}" class="fancybox-img"
                                data-fancybox="product">
                                <img src="{{ env('APP_URL').$otherImage }}" title="product 2" class="img-fluid">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <a href="#product_images" class="carousel-control-prev prev-arrow" data-bs-slide="prev"><i
                            class="fa-solid fa-angle-left"></i></a>
                    <a href="#product_images" class="carousel-control-next next-arrow" data-bs-slide="next"><i
                            class="fa-solid fa-chevron-right"></i></a>
                    <div
                        class="carousel-thumbs position-relative w-100 mt-4 carousel-indicators d-none d-md-flex m-0">
                        @foreach($product['other_images'] as $otherImage)
                        <a href="#product_images" class="active d-inline-block thumb-box mb-2" data-bs-slide-to="0">
                            <img src="{{ env('APP_URL').$otherImage }}" title="tshirt black front"
                                class="img-fluid">
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div
                    class="page-header mb-0 pb-0 pb-1 border-bottom border-2 d-flex align-items-center justify-content-between mb-4">
                    <h2 class="product-heading mb-0">{{ $product['title'] }} </h2> 
                    <!-- <span class="text-primary">Treadmill</span> -->
                    <div class="brands">
                        <span class="badge bg-dark d-inline-block p-2 mr-2"><i class="fas fa-check-circle me-1"
                                aria-hidden="true"></i> {{ $product['category']['title'] }} </span>
                        <span class="badge bg-success d-inline-block p-2"><i class="fas fa-check-circle me-1"
                                aria-hidden="true"></i> In stock</span>
                    </div>
                </div>
                <div class="price-calculator">
                    <div class="quantity mb-4">
                        <h5 class="mb-3">Quantity
                            <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                                data-bs-trigger="focus" data-bs-content="Quntity is here">
                                <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                            </a>
                        </h5>
                        <div class="qty d-flex">
                            <button type="button" value="+" id="add" class="add btn btn-info me-2"> <i
                                    class="fa-solid fa-plus"></i> </button>
                            <input type="text" id="qty1" value="1"
                                class="form-control text-center fw-bold border border-secondary qty">
                            <button type="button" value="-" id="minus" class="minus btn btn-info ms-2"><i
                                    class="fa-solid fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="product-details mb-4">
                        <h5>Product Details
                            <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                                data-bs-trigger="focus" data-bs-content="product details is here">
                                <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                            </a>
                        </h5>
                        {!! $product['details'] !!}
                    </div>
                    <div class="price-details mb-4">
                        <h5>Total Price
                            <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                                data-bs-trigger="focus" data-bs-content="product details is here">
                                <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                            </a>
                        </h5>
                        <div class="price d-flex align-items-center mb-3">
                            <h3 class="fs-1 mb-0 fw-bold">AED {{ number_format($product['discounted_price'],2) }} </h3> 
                            <del class="text-primary fs-5 ms-3">AED {{ number_format($product['price'],2) }}</del>
                            <span class="ms-4 fw-semibold fs-5 text-success">({{ $product['discount_percentage'] }}% OFF)</span>
                        </div>
                    </div>
                    <p class="mb-2"><strong>Note:</strong> Next Day Delivery is only available for Dubai and Abu
                        Dhabi</p>
                    <p class="mb-2"><strong><i class="fa-solid fa-tag fa-lg"></i> Bank Offers:</strong> 0% EMI
                        plans. Pay as low as AED 249.50 for 6 months.
                        <a href="#" class="text-primary"> <u>Learn More </u> </a>
                    </p>
                    <div class="shopping-now my-4 d-flex">
                        <a href="#" class="btn btn-primary w-50 px-4 py-3 fw-semibold me-3"><i
                                class="fa-solid fa-cart-shopping fa-lg me-2"></i> ADD TO CART</a>
                        <a href="#" class="btn btn-secondary w-50 px-4 py-3 fw-semibold me-3"><i
                                class="fa-solid fa-heart fa-lg me-2"></i> FAVOURITE</a>
                    </div>
                    <div class="shopping-now my-4 d-flex">
                        <a href="#" class="btn btn-info px-4 py-3 w-50 fw-semibold me-3"><i
                                class="fa-solid fa-phone me-2"></i> CONTACT US</a>
                        <a href="#" class="btn btn-success px-4 py-3 w-50 fw-semibold me-3"><i
                                class="fa-brands fa-whatsapp fa-lg me-2"></i> WHATSAPP</a>
                    </div>
                    <div class="services border-top border-bottom py-3 bg-light-gray">
                        <!-- <h5 class="mb-3">Services
                            <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                                data-bs-trigger="focus" data-bs-content="Quntity is here">
                                <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                            </a>
                        </h5> -->
                        <div class="container">
                            <livewire:service-offer />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-tab py-5 bg-light-gray border-top border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" id="producttab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link active fw-semibold border-0 fs-5" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#ProductDescription"
                            aria-controls="ProductDescription" aria-selected="false">Product Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link border-0 fw-semibold fs-5" id="Specification-tab"
                            data-bs-toggle="tab" data-bs-target="#Specification"
                            aria-controls="Specification" aria-selected="true">Specification</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link border-0 fw-semibold fs-5" id="Delivery-tab"
                            data-bs-toggle="tab" data-bs-target="#Delivery"
                            aria-controls="Delivery" aria-selected="true">Delivery, Warranty & Installation</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ProductDescription" role="tabpanel"
                        aria-labelledby="ProductDescription-tab" tabindex="0">
                        <div class="p-4">
                            {!! $product['description'] !!}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Specification" role="tabpanel"
                        aria-labelledby="Specification-tab" tabindex="0">
                        <div class="table-responsive p-4">
                            <table class="table table-striped table-bordered bg-white">
                                <thead class="table-dark">
                                    <tr>
                                        <th width="40%"><strong> Title </strong></th>
                                        <th width="60%"><strong>Value</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product['productSpecification'] as $key => $specification)
                                    <tr>
                                        <td width="40%"><strong>{{ $specification['option']['name'] }}</strong></td>
                                        <td width="60%"><span class="text-dark">{{ $specification['optionAttribute']['value'] }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Delivery" role="tabpanel"
                    aria-labelledby="Delivery-tab" tabindex="0">
                    <div class="p-4">
                        {!! $product['description_2'] !!}
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
@stop
@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@stop