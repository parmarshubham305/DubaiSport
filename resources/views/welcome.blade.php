@extends('frontend.layouts.layout')
@section('content')
<livewire:service-offer/>
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
            <div class="col-md-6 border-end">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Contact <span class="text-primary">Us</span></h2>
                </div>
                <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                    <li class="border-end"><a href="#" class="d-inline-block px-4 d-flex align-items-center"><span
                                class="email d-flex align-items-center justify-content-center me-2"><i
                                    class="fa-solid fa-envelope"></i></span> any@gmail.com</a></li>
                    <li class="border-end"><a href="#" class="d-inline-block px-4 d-flex align-items-center"><span
                                class="phone d-flex align-items-center justify-content-center me-2"><i
                                    class="fa-solid fa-phone"></i></span>+1 123 456 7896</a></li>
                    <li><a href="#" class="d-inline-block px-4 d-flex align-items-center"><span
                        class="phone d-flex align-items-center justify-content-center me-2"><i class="fa-brands fa-whatsapp fa-lg"></i></span>+1 123 456 7896</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Subscribe <span class="text-primary">Now</span></h2>
                </div>
                <div class="d-flex subscribe-bar py-2 justify-content-center" role="subscribe">
                    <input class="form-control border-end-0 border-primary rounded-0 w-50" type="search"
                        placeholder="Email Address" aria-label="Search">
                    <button class="btn btn-primary rounded-0" type="submit">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>  
@stop