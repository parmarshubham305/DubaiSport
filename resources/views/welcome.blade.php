@extends('frontend.layouts.layout')
@section('content')
<div class="services border-top border-bottom py-3 bg-light-gray">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center justify-content-between mb-0">
            <li class="d-flex align-items-center">
                <span class="service-icon me-3"><span class="custom-icon custom-fast-delivery"></span></span>
                <span>
                    <span class="d-block fw-semibold lh-2 text-primary">Fastest Delivery </span>
                    <small>Next day delivery available</small>
                </span>
            </li>
            <li class="d-flex align-items-center">
                <span class="service-icon me-3"><span class="custom-icon custom-secure-shopping"></span></span>
                <span>
                    <span class="d-block fw-semibold lh-2 text-primary">Secure Shopping </span>
                    <small>Safe and Secure Checkout</small>
                </span>
            </li>
            <li class="d-flex align-items-center">
                <span class="service-icon me-3"><span class="custom-icon custom-free-installation"></span></span>
                <span>
                    <span class="d-block fw-semibold lh-2 text-primary">Free Installation </span>
                    <small>On all fitness & sports equipment</small>
                </span>
            </li>
            <li class="d-flex align-items-center">
                <span class="service-icon me-3"><span class="custom-icon custom-product-warranty"></span></span>
                <span>
                    <span class="d-block fw-semibold lh-2 text-primary">Product Warranty</span>
                    <small>1 Year Standard Warranty on Equipment</small>
                </span>
            </li>
        </ul>
    </div>
</div>
<div class="banner__slider">
    <div class="slider stick-dots">
        <div class="slide">
            <div class="slide__img overflow-hidden">
                <img src="{{ env('APP_URL').'front/images/banner1.jpg' }}" class="full-image img-fluid animated"
                    data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content slide__content__left" data-animation-in="fadeInLeft">
                <div class="slide__content_details">
                    <h2 class="animated">Being the Best <span class="d-block"><span
                                class="text-primary">Fitness</span> Products</span></h2>
                    <h5 class="animated">Best Quality Equipments and Range of Products</h5>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide__img overflow-hidden">
                <img src="{{ env('APP_URL').'front/images/banner2.jpg' }}" class="full-image img-fluid animated"
                    data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content slide__content__right" data-animation-in="fadeInRight">
                <div class="slide__content_details">
                    <h2 class="animated">Being the Best <span class="d-block"><span
                                class="text-primary">Fitness</span> Products</span></h2>
                    <h5 class="animated">Best Quality Equipments and Range of Products</h5>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide__img overflow-hidden">
                <img src="{{ env('APP_URL').'front/images/banner3.jpg' }}" class="full-image img-fluid animated"
                    data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content slide__content__right" data-animation-in="fadeInRight">
                <div class="slide__content_details">
                    <h2 class="animated">Being the Best <span class="d-block"><span
                                class="text-primary">Fitness</span> Products</span></h2>
                    <h5 class="animated">Best Quality Equipments and Range of Products</h5>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
            fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="test">
        </symbol>
    </svg>
</div>

<div class="product-list spacing-y" id="#product-list">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Best Seller <span class="text-primary">Products</span></h2>
        </div>
        <div class="product-slider">
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"><img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Merrithew V2 Max Plus Reformer</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_2.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Inspire Fitness Functional Trainer</a>
                    </p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_3.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Schwinn 570R Recumbent Bike</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_4.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Concept 2 Indoor Rower Model</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_5.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Dumbles</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"><img src="{{ env('APP_URL').'front/images/products/product_6.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Bikes</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-list bg-light spacing-y" id="#product-list">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Popular <span class="text-primary">Products</span></h2>
        </div>
        <div class="product-slider">
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"><img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Merrithew V2 Max Plus Reformer</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_2.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Inspire Fitness Functional Trainer</a>
                    </p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_3.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Schwinn 570R Recumbent Bike</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_4.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Concept 2 Indoor Rower Model</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_5.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Dumbles</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"><img src="{{ env('APP_URL').'front/images/products/product_6.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Bikes</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-list spacing-y" id="#product-list">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">New <span class="text-primary">Listing</span></h2>
        </div>
        <div class="product-slider">
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"><img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Merrithew V2 Max Plus Reformer</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_2.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Inspire Fitness Functional Trainer</a>
                    </p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_3.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Schwinn 570R Recumbent Bike</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_4.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Concept 2 Indoor Rower Model</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"> <img src="{{ env('APP_URL').'front/images/products/product_5.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Dumbles</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
            <div class="card mx-3 position-relative">
                <a href="#" class="product-img"><img src="{{ env('APP_URL').'front/images/products/product_6.jpg' }}" alt="produsct"
                        class="card-img-top img-fluid"></a>
                <a href="#" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                            class="path1"></span><span class="path2"></span></span></a>
                <div class="card-body bg-light-gray border-top">
                    <span class="d-block mb-1">Super Gym</span>
                    <p class="fw-semibold mb-1 product-heading"><a href="#">Bikes</a></p>
                    <p class="text-primary fw-bold product-price d-flex align-items-center">AED 6243.21 <del
                            class="text-secondary ms-1">AED 7536</del><small class="badge ms-1 bg-primary px-2">20%
                            OFF</small></p>
                    <a href="#" class="btn btn-info btn-sm">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ShopByBrand" class="shop-by-brand bg-light spacing-y">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Shop By <span class="text-primary">Brands</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img1.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/fitplus.png' }}" alt="fit plus"></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Fit Plus
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img2.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"> <img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/supergym.png' }}" alt="super gym"></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Super Gym
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img3.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"> <img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/ivanko.png' }}" alt="ivanko"></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Ivanko </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img4.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"> <img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/florex.png' }}" alt="florex"></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Florex </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img2.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"> <img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/spirit.png' }}" alt="spirit"></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">spirit </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img4.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/fitplus.png'}}" alt=""></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Sawo Sanspa
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img1.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"> <img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/fitplus.png' }}" alt=""></span>
                        </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Wood Pack
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="box-brand bg-white border text-center">
                    <a href="#" class="d-block text-center">
                        <span class="brand position-relative d-block">
                            <span class="brand-img mx-auto"><img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/brand-img3.jpg' }}" alt="brand-img1"></span>
                            <span class="brand-logo mx-auto"> <img class="img-fluid" src="{{ env('APP_URL').'front/images/brands/fitplus.png' }}" alt=""></span>
                            </span>
                        <span class="fw-semibold fs-5 d-block text-center brand-text py-3 border-top">Fit Plus
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner-banner">
    <img src="{{ env('APP_URL').'front/images/company_banner.jpg' }}" alt="company_banner" class="img-fluid">
</div>
<div id="Distributors" class="distributors-logo bg-light pb-0 spacing-y">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Authorized <span class="text-primary">Distributors</span></h2>
        </div>
        <div class="distributors-slider">
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/danube_properties.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/dubai_petroleum.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/dubai_south.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/enoc.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/khansaheb.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/lapita.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/marriott.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/naresco_contracting.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/Nshama.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/radisson.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/rta.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <div class="client-logo">
                <img src="{{ env('APP_URL').'front/images/client/savills.png' }}" alt="cluttons" class="img-fluid">
            </div>
            <!-- <div class="client-logo">
                <img src="images/client/wasl_properties.jpg" alt="cluttons" class="img-fluid">
            </div> -->
        </div>
    </div>
</div>
<div class="commercial bg-light spacing-y">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="commercial-box">
                    <img src="{{ env('APP_URL').'front/images/subscription.jpg' }}" alt="subscription">
                    <div class="commercial-content">
                        <h4 class="text-white d-block"><span class="text-primary d-block">COMMERCIAL</span> FITNESS SOLUTIONS</h4>
                        <a href="#" class="btn btn-primary fw-semibold">GET A QOUTE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="commercial-box">
                    <img src="{{ env('APP_URL').'front/images/service.jpg' }}" alt="service">
                    <div class="commercial-content">
                        <h4 class="text-white d-block"><span class="text-primary d-block">EQUIPMENT</span> SERVICE</h4>
                        <a href="#" class="btn btn-primary fw-semibold">BOOK AN APPOINMENTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<div class="subscribe-section border-top spacing-y">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Conatc <span class="text-primary">Us</span></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Subscribe  <span class="text-primary">Now</span></h2>
                </div>
            </div>
        </div>
    </div>
</div>  
<div id="footer" class="footer-content spacing-y pb-0 bg-light-gray border-top">
    <div class="footer_top text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Terms &amp; Conditions</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Warranty Policy</a>
                        </li>
                        <li>
                            <a href="#">Delivery &amp; Returns</a>
                        </li>
                        <li>	
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">FAQs</a>
                        </li>
                        <li>
                            <a href="#">Whats New!</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5>Contact Us</h5>  
                    <ul  class="list-unstyled">
                        <li><a href="#"><i class="fa-solid fa-envelope me-2"></i>any@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone me-2"></i>01234523423</a></li>
                    </ul>  
                    <h5>Service and Technical support</h5>  
                    <ul  class="list-unstyled">
                        <li><a href="#"><i class="fa-solid fa-envelope me-2"></i>service@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone me-2"></i>012345234236</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Product Category</h5>  
                    <ul class="list-unstyled category-list">
                        <li>
                            <a href="#">Cardio</a>
                        </li>
                        <li>
                            <a href="#">Loker & Benches</a>
                        </li>
                        <li>
                            <a href="#">Kids Plays</a>
                        </li>
                        <li>
                            <a href="#">Bikes</a>
                        </li>
                        <li>
                            <a href="#">Strengh & Free weight</a>
                        </li>
                        <li>
                            <a href="#">Benchs</a>
                        </li>
                        <li>
                            <a href="#">Flooring</a>
                        </li>
                        <li>
                            <a href="#">Accessories</a>
                        </li>
                        
                        <li>
                            <a href="#">Sonar & Stream</a>
                        </li>
                        <li>
                            <a href="#">Outdoor Fitness Equipment</a>
                        </li>
                        <li>
                            <a href="#">Multiple Cords</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5><i class="fa-solid fa-location-dot me-2"></i> Showroom</h5>  
                    <p class="text-secondary">task asjdhasd asdkdjhjdsfa sdfkhskdf </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container py-4 border-top">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled social-media d-flex align-items-center mb-0">
                        <li class="me-2"><a href="#"><i class="fa-brands fa-facebook-f fa-lg"></i></a></li>
                        <li class="me-2"><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></li>
                        <li class="me-2"><a href="#"><i class="fa-brands fa-whatsapp fa-lg"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-start py-4" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header border-bottom pb-1">
        <h5 class="mb-0 offcanvas-title fs-6" id="offcanvasExampleLabel"><a href="#">Shop By Category</a></h5>
        <button type="button" class="btn-close close-btn position-absolute bg-primary" data-bs-dismiss="offcanvas"
            aria-label="Close"><i class="fa-solid fa-xmark fs-2x text-white"></i></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="list-unstyled">
            <li>
                <a href="#" class="py-2 px-4 border-bottom d-block">Hello</a>
            </li>
            <li>
                <a href="#" class="py-2 px-4 border-bottom d-block">Hello</a>
            </li>
        </ul>
    </div>
</div>
@stop